<?php


if(!isset($_GET["tabla"])) exit();
$tabla=$_GET['tabla'];
$fecha= date("Y");
$añoant=$fecha-1;
$var1='tsubsidio';
$var2='tsubsidioasimilados';
$var3='subsidios';
$var4='impuestosnomina';
$var5='salario';
$var6='umas';
$var7='isr';
$var8='ispt';
$var9='israsimilados';

	include_once "../database/db.config.php";
	
	//tsubsidio Y tsubsidioasimilados
	if(($tabla==$var1)|| ($tabla==$var2)){
		$stmt = $conex->prepare("CREATE TEMPORARY TABLE tmp SELECT sueldoinf, sueldosup, limiteinf, limitesup, subsidio, Anio, tipo FROM $tabla WHERE Anio=?;");
		$stmt->bind_param('i', $añoant);
		$stmt->execute();
		
			if($stmt == TRUE){							
				$stmt = $conex->prepare("UPDATE tmp SET Anio=? WHERE Anio = ?;");
				$stmt->bind_param('ii', $fecha, $añoant);				
				$stmt->execute();
					if($stmt == TRUE){
						$stmt = $conex->prepare("INSERT INTO $tabla (sueldoinf, sueldosup, limiteinf, limitesup, subsidio, Anio, tipo) SELECT * FROM tmp WHERE Anio = ? ;");
						$stmt->bind_param('i', $fecha);						
						$stmt->execute();
						if($stmt == TRUE){
							header("Location: ../$tabla.php");
							exit;
						}
						else echo "Algo salió mal";
					}
					else echo "Algo salió mal";
			}
			else echo "Algo salió mal";
		}
		else{
			//subsidios
			if($tabla==$var3){
				$stmt = $conex->prepare("CREATE TEMPORARY TABLE tmp SELECT ingDesde, ingHasta, credito, anio, tipo FROM $tabla WHERE anio=?;");
				$stmt->bind_param('i', $añoant);
				$stmt->execute();
				
					if($stmt == TRUE){							
						$stmt = $conex->prepare("UPDATE tmp SET anio=? WHERE anio = ?;");
						$stmt->bind_param('ii', $fecha, $añoant);					
						$stmt->execute();
							if($stmt == TRUE){
								$stmt = $conex->prepare("INSERT INTO $tabla (ingDesde, ingHasta, credito, anio, tipo) SELECT * FROM tmp WHERE anio = ? ;");
								$stmt->bind_param('i', $fecha);								
								$stmt->execute();
								if($stmt == TRUE){
									header("Location: ../subsidios.php");
									exit;
								}
								else echo "Algo salió mal";
							}
							else echo "Algo salió mal";
					}
					else echo "Algo salió mal";
			}
			else{
				//impuestosnomina
				if($tabla==$var4){
					$stmt = $conex->prepare("CREATE TEMPORARY TABLE tmp SELECT Estado, Porcentaje, Descripcion, anio FROM $tabla WHERE anio=?;");
					$stmt->bind_param('i', $añoant);
					$stmt->execute();
					
						if($stmt == TRUE){							
							$stmt = $conex->prepare("UPDATE tmp SET anio=? WHERE anio = ?;");
							$stmt->bind_param('ii', $fecha, $añoant);						
							$stmt->execute();
								if($stmt == TRUE){
									$stmt = $conex->prepare("INSERT INTO $tabla (Estado, Porcentaje, Descripcion, anio) SELECT * FROM tmp WHERE anio = ? ;");
									$stmt->bind_param('i', $fecha);									
									$stmt->execute();
									if($stmt == TRUE){
										header("Location: ../impuestonomina.php");
										exit;
									}
									else echo "Algo salió mal";
								}
								else echo "Algo salió mal";
						}
						else echo "Algo salió mal";
				}
				else{
					//salario
					if($tabla==$var5){
						$stmt = $conex->prepare("CREATE TEMPORARY TABLE tmp SELECT anio, zona, valor FROM $tabla WHERE anio=?;");
						$stmt->bind_param('i', $añoant);
						$stmt->execute();
						
							if($stmt == TRUE){							
								$stmt = $conex->prepare("UPDATE tmp SET anio=? WHERE anio = ?;");
								$stmt->bind_param('ii', $fecha, $añoant);								
								$stmt->execute();
									if($stmt == TRUE){
										$stmt = $conex->prepare("INSERT INTO $tabla (anio, zona, valor) SELECT * FROM tmp WHERE anio = ? ;");
										$stmt->bind_param('i', $fecha);										
										$stmt->execute();
										if($stmt == TRUE){
											header("Location: ../$tabla.php");
											exit;
										}
										else echo "Algo salió mal";
									}
									else echo "Algo salió mal";
							}
							else echo "Algo salió mal";
					}
					else{
						//UMAS
						if($tabla==$var6){
							$stmt = $conex->prepare("CREATE TEMPORARY TABLE tmp SELECT uma, anio FROM $tabla WHERE anio=?;");
							$stmt->bind_param('i', $añoant);
							$stmt->execute();
							
								if($stmt == TRUE){							
									$stmt = $conex->prepare("UPDATE tmp SET anio=? WHERE anio = ?;");
									$stmt->bind_param('ii', $fecha, $añoant);								
									$stmt->execute();
										if($stmt == TRUE){
											$stmt = $conex->prepare("INSERT INTO $tabla (uma, anio) SELECT * FROM tmp WHERE anio = ? ;");
											$stmt->bind_param('i', $fecha);										
											$stmt->execute();
											if($stmt == TRUE){
												header("Location: ../$tabla.php");
												exit;
											}
											else echo "Algo salió mal";
										}
										else echo "Algo salió mal";
								}
								else echo "Algo salió mal";
						}
						else{
							//ISR
							if($tabla==$var7){
								$stmt = $conex->prepare("CREATE TEMPORARY TABLE tmp SELECT sueldoinf, sueldosup, limiteinf, limitesup, coutafija, porcentaje, anio, tipo FROM $tabla WHERE anio=?;");
								$stmt->bind_param('i', $añoant);
								$stmt->execute();
								
									if($stmt == TRUE){							
										$stmt = $conex->prepare("UPDATE tmp SET anio=? WHERE anio = ?;");
										$stmt->bind_param('ii', $fecha, $añoant);								
										$stmt->execute();
											if($stmt == TRUE){
												$stmt = $conex->prepare("INSERT INTO $tabla (sueldoinf, sueldosup, limiteinf, limitesup, coutafija, porcentaje, anio, tipo) SELECT * FROM tmp WHERE anio = ? ;");
												$stmt->bind_param('i', $fecha);										
												$stmt->execute();
												if($stmt == TRUE){
													header("Location: ../$tabla.php");
													exit;
												}
												else echo "Algo salió mal";
											}
											else echo "Algo salió mal";
									}
									else echo "Algo salió mal";
							}
							else{
								//ISPT
								if($tabla==$var8){
									$stmt = $conex->prepare("CREATE TEMPORARY TABLE tmp SELECT limiteInf, limiteSup, coutafija, porcentajeEx, anio, tipo FROM $tabla WHERE anio=?;");
									$stmt->bind_param('i', $añoant);
									$stmt->execute();
									
										if($stmt == TRUE){							
											$stmt = $conex->prepare("UPDATE tmp SET anio=? WHERE anio = ?;");
											$stmt->bind_param('ii', $fecha, $añoant);								
											$stmt->execute();
												if($stmt == TRUE){
													$stmt = $conex->prepare("INSERT INTO $tabla (limiteInf, limiteSup, coutafija, porcentajeEx, anio, tipo) SELECT * FROM tmp WHERE anio = ? ;");
													$stmt->bind_param('i', $fecha);										
													$stmt->execute();
													if($stmt == TRUE){
														header("Location: ../$tabla.php");
														exit;
													}
													else echo "Algo salió mal";
												}
												else echo "Algo salió mal";
										}
										else echo "Algo salió mal";
								}
								else{
									//israsimilados
									if($tabla==$var9){
										$stmt = $conex->prepare("CREATE TEMPORARY TABLE tmp SELECT sueldoinf, sueldosup, limiteinf, limitesup, coutafija, porcentaje, anio, tipo FROM $tabla WHERE anio=?;");
										$stmt->bind_param('i', $añoant);
										$stmt->execute();
										
											if($stmt == TRUE){							
												$stmt = $conex->prepare("UPDATE tmp SET anio=? WHERE anio = ?;");
												$stmt->bind_param('ii', $fecha, $añoant);								
												$stmt->execute();
													if($stmt == TRUE){
														$stmt = $conex->prepare("INSERT INTO $tabla (sueldoinf, sueldosup, limiteinf, limitesup, coutafija, porcentaje, anio, tipo) SELECT * FROM tmp WHERE anio = ? ;");
														$stmt->bind_param('i', $fecha);										
														$stmt->execute();
														if($stmt == TRUE){
															header("Location: ../isrAsimilados.php");
															exit;
														}
														else echo "Algo salió mal";
													}
													else echo "Algo salió mal";
											}
											else echo "Algo salió mal";
									}
								}
							}
						}
					}
				}
			}
		}
?>