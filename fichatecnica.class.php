<?php

class FichaTecnica {

    // Atributos
	var $idFichaTecnica;		
	var $tipoFichaTecnica;		
	var $referenciaBaseFichaTecnica;
	var $nombreLargoFichaTecnica;
	var $nombreCortoFichaTecnica;
	var $codigoAlternoFichaTecnica;
	var $numeroMoldeFichaTecnica;
	var $areaMoldeFichaTecnica;
	var $disenadorFichaTecnica;
	var $SegLogin_idUsuarioCrea;	
	var $fechaCreacionFichaTecnica;
	var $SegLogin_idUsuarioAprueba;
	var $fechaAprobacionFichaTecnica;
	var $SegLogin_idUsuarioModifica;
	var $fechaModificacionFichaTecnica;
	var $estadoFichaTecnica;
	var $conceptoTelaFichaTecnica;
	var $cantidadContenidaFichaTecnica;
	var $Tercero_idCliente;
	var $Marca_idMarca;
	var $referenciaClienteFichaTecnica;
	var $TipoNegocio_idTipoNegocio;
	var $TipoProducto_idTipoProducto;
	var $Temporada_idTemporada;
	var $EstadoConservacion_idEstadoConservacion;
	var $Categoria_idCategoria;
	var $CaracteristicasHilaza_idCaracteristicasHilaza;
	var $UnidadMedida_idCompra;
	var $UnidadMedida_idVenta; 
	var $Pais_idPais;
	var $DescripcionBase_idDescripcionBase;
	var $ConstruccionHilo_idContruccionHilo;
	var $ClienteObjetivo_idClienteObjetivo;
        var $EsquemaProducto_idEsquemaProducto;
	
	var $Clima_idClima;
	var $Difusion_idDifusion;
	var $Estrategia_idEstrategia;
	var $Seccion_idSeccion;
	var $Evento_idEvento;
	var $PosicionArancelaria_idPosicionArancelaria;       
	
	var $precioFichaTecnica;
	var $costoFichaTecnica;
	var $ivaIncluidoFichaTecnica;
	var $acumulaPuntosFichaTecnica;
	var $redimePuntosFichaTecnica;
        var $SegmentoOperacion_idSegmentoOperacion;
	
	var $costoMaterialFichaTecnica;
	var $costoProcesoFichaTecnica;
	var $costoMOFichaTecnica;
	var $costoPrimoFichaTecnica;
	var $costoCIFFichaTecnica;
	var $subtotalFichaTecnica;
	var $costoServicioFichaTecnica;
	var $costoFijoFichaTecnica;
	var $costoUnitarioFichaTecnica;
	
	var $estadoCostoFichaTecnica;
	var $fechaAprobacionCostoFichaTecnica;
	var $tasaCambioCostoFichaTecnica;
	var $observacionCostosFichaTecnica;
	
	var $observacionesFichaTecnica;
	var $observacionCotizacionFichaTecnica;
	var $observacionConstruccionFichaTecnica;
	var $Composicion_idComposicion;
	var $imagenMedida1FichaTecnica;
	var $imagenMedida2FichaTecnica;
	var $samCosteoFichaTecnica;

	// datos de Colores
	var $idFichaTecnicaColor;
	var $Color_idColor;
	var $codigoColorClienteFichaTecnicaColor;
	var $nombreEspecialFichaTecnicaColor;
	var $cantidadFichaTecnicaColor;

	// datos de Tallas
	var $idFichaTecnicaTalla;
	var $Talla_idTalla;
	var $codigoTallaClienteFichaTecnicaTalla;
	var $BaseMedidaFichaTecnicaTalla;
	var $curvaFichaTecnicaTalla;
	
	// datos de Tallas Complemento
	var $idFichaTecnicaTallaComplemento;
	var $TallaComplemento_idTallaComplemento;
	var $codigoTallaClienteFichaTecnicaTallaComplemento;
	
	// Datos de las Imagenes
	var $idFichaTecnicaImagen;
	var $codigoAlternoFichaTecnicaImagen;
	var $nombreFichaTecnicaImagen;
	var $imagenFichaTecnicaImagen;
	var $observacionFichaTecnicaImagen;
	
	// Datos de las piezas
	var $idFichaTecnicaPieza;
	var $codigoAlternoFichaTecnicaPieza;
	var $nombreFichaTecnicaPieza;
	var $imagenFichaTecnicaPieza;
	var $observacionFichaTecnicaPieza;

	// Datos de los detalles de construccion
	var $idFichaTecnicaConstruccion;
	var $codigoAlternoFichaTecnicaConstruccion;
	var $nombreFichaTecnicaConstruccion;
	var $imagenFichaTecnicaConstruccion;
	var $observacionFichaTecnicaConstruccion;

	// datos de las especificaciones
	var $idFichaTecnicaEspecificacion ;
	//var $tipoFichaTecnicaEspecificacion ;
	var $nombreFichaTecnicaEspecificacion ;
	var $especificacionFichaTecnicaEspecificacion ;
	var $observacionFichaTecnicaEspecificacion ;
	
	// datos de componentes
	var $idFichaTecnicaComponente;
	var $componenteFichaTecnicaComponente;
	var $ComponenteFichaTecnica_idComponenteFichaTecnica;
	var $tipoFichaTecnicaComponente;
	var $tejidoFichaTecnicaComponente;
	var $pesoFichaTecnicaComponente;
	var $composicionFichaTecnicaComponente;
	var $imagenFichaTecnicaComponente;
									
	// Datos de Combinaciones
	var $idFichaTecnicaCombinacion;
	var $nombreFichaTecnicaCombinacion;
	var $Color_idBase;
	var $Color_idCombinacion;
	
	// Datos de Materiales
	var $CentroProduccion_idCentroProduccion;
	var $idFichaTecnicaMaterial;
    var $imagenFichaTecnicaMaterial;
	var $Producto_idMaterial;
	var $Color_idColorMaterial;
	var $Talla_idTallaMaterial;
	var $TallaComplemento_idTallaComplementoMaterial;
	var $noAfectaCostoMaterial;
	var $referenciaProducto;
	var $nombreLargoProducto;
	var $tipoProductoMaterial;
	var $porcentajeDesperdicioMaterial;
	var $consumoMaterialProductoMaterial;
	var $consumoMaterialConversionProductoMaterial;
	var $consumoProductoProductoMaterial;
	var $ParteMedida_idParteMedida;
	var $observacionProductoMaterial;
	var $costoUnitarioAprobadoProductoMaterial;
    
    //Datos de Materiales Adicionales
    var $idFichaTecnicaMaterialAdicional;
    var $nombreFichaTecnicaMaterialAdicional;
    var $consumoFichaTecnicaMaterialAdicional;
    var $costoUnitarioFichaTecnicaMaterialAdicional;    	
	
	// materiales de empaque de la minificha
	var $idFichaTecnicaEmpaque;
	var $materialFichaTecnicaEmpaque;
	var $valorFichaTecnicaEmpaque;
	var $observacionFichaTecnicaEmpaque;
			
			
	// Datos de Medidas
	
	var $idFichaTecnicaMedida;
	var $ParteMedida_idParteMedidaMed;
	var $codigoFichaTecnicaMedidaTalla;
	var $observacionFichaTecnicaMedida ;
	var $toleranciaFichaTecnicaMedida;
	var $escalaFichaTecnicaMedida;
	var $idFichaTecnicaMedidaTalla ;
	var $tipoFichaTecnicaMedida ;
	var $idMedida;
	var $tipoMedida;
	var $Talla_idTallaMed;
	var $valorFichaTecnicaMedidaTalla;

	// Datos de los archivos adjuntos
	var $idFichaTecnicaAdjunto;
	var $codigoAlternoFichaTecnicaAdjunto;
	var $versionFichaTecnicaAdjunto;
	var $fechaFichaTecnicaAdjunto;
	var $nombreFichaTecnicaAdjunto;
	var $archivoFichaTecnicaAdjunto;
	var $observacionFichaTecnicaAdjunto;
	
	// datos de los centros de produccion (ruta de procesos)
	var $afectaMaterialFichaTecnicaCentroProduccion;
	var $afectaListaOperacionFichaTecnicaCentroProduccion;
	var $ordenFichaTecnicaCentroProduccion;
	var $idFichaTecnicaCentroProduccion;
	var $CentroProduccion_idCentroProduccion_2;
	var $Tercero_idProveedorPorDefecto;
	var $perdidaTintoreriaFichaTecnicaCentroProduccion;
	var $costoEstimadoFichaTecnicaCentroProduccion;
	var $observacionFichaTecnicaCentroProduccion;
    
        //Campos de la pestaÃ±a imagenes
        var $idFichaTecnicaCostoEstandarImagen;
        var $codigoAlternoFichaTecnicaCostoEstandarImagen;
        var $nombreFichaTecnicaCostoEstandarImagen;
        var $imagenFichaTecnicaCostoEstandarImagen;
        var $observacionFichaTecnicaCostoEstandarImagen;    
    
        //Datos de Pinta, Calibre y Tono
        var $Tono_idTono;
        var $Pinta_idPinta;
        var $CalibreHilo_idCalibreHilo;
        
        //Datos de Logistica
        var $pesoBrutoFichaTecnica;
        var $pesoNetoFichaTecnica;
        var $altoFichaTecnica;
        var $anchoFichaTecnica;
        var $profundidadFichaTecnica;
        var $diasReposicionFichaTecnica;
        var $puntoPedidoFichaTecnica;
        var $cantidadSeguridadFichaTecnica;
        var $stockMinimoFichaTecnica;
        var $stockMaximoFichaTecnica;

        
        
        //Datos de DATOS TECNICOS
        var $idFichaTecnicaDatosTecnicos;
        var $promedioFichaTecnicaDatosTecnicos;
        var $toleranciaFichaTecnicaDatosTecnicos;
        var $FichaTecnica_idFichaTecnica;

        //Datos de Maquina CRUDO
        var $Composicion_idComposicionFichaTecnica;
        var $anchoCrudoFichaTecnica;
        var $rendimientoCrudoFichaTecnica;
        var $pesoCrudoFichaTecnica;
        //Datos de Maquina ACABADO
        var $anchoAcabadoRamaFichaTecnica;
        var $encogimientoAnchoFichaTecnica;
        var $rendimientoSalidaRamaFichaTecnica;
        var $encogimientoLargoFichaTecnica;
        var $pesoTerminadoRamaFichaTecnica;
        var $porcentajeViroFichaTecnica;
        var $rendimientoReposoFichaTecnica;
        var $perdidaTintoreriaFichaTecnica;
        var $pesoReposoFichaTecnica;
        var $perdidaTotalProcesoFichaTecnica;
        var $anchoClienteFichaTecnica;
        var $toleranciaPermitidaAnchoFichaTecnica;
        var $elongacionAnchoFichaTecnica;
        var $toleranciaPermitidaRendimientoFichaTecnica;
        var $elongacionLargoFichaTecnica;
        var $pillingFichaTecnica;
        
        var $toleranciaTintoreriaPermitidaAnchoFichaTecnica;
        var $toleranciaTintoreriaPermitidaRendimientoFichaTecnica;
        
        //Datos de Maquina TINTORERIA
        var $idFichaTecnicaTintoreria;
        var $nombreFichaTecnicaTintoreria;
        var $cantidadFichaTecnicaTintoreria;


        //Datos de la pestaÃ±a Maquinas
        var $idFichaTecnicaMaquinas;
        var $idFichaTecnicaMaquinasAux;
        var $RecursoProduccion_idRecursoProduccion;
        var $porDefectoFichaTecnicaMaquinas;
        var $numeroDientesIzquierdosFichaTecnicaMaquinas;
        var $numeroDientesCentroFichaTecnicaMaquinas;
        var $numeroDientesDerechoFichaTecnicaMaquinas;
        var $tiempoFichaTecnicaMaquinas;
        var $mallasCrudoFichaTecnicaMaquinas;
        var $columnasCrudoFichaTecnicaMaquinas;
        var $puntadaAlturaFichaTecnicaMaquinas;
        var $alturaDialFichaTecnicaMaquinas;
        var $elongacionAnchoFichaTecnicaMaquinas;
        var $elongacionLargoFichaTecnicaMaquinas;
        var $anchoExpanderFichaTecnicaMaquinas;
        var $recobradorFichaTecnicaMaquinas;
        var $pesoRodajaMaquinaRealFichaTecnicaMaquinas;
        var $pesoRodajaMaquinaTeoricaFichaTecnicaMaquinas;
        var $notasFichaTecnicaMaquinas;
        var $opcionRecobradorFichaTecnicaMaquinas;
        var $gradosFichaTecnicaMaquinas;
        var $profundidadFichaTecnicaMaquinas;
        var $pinoneriaIzquierdoFichaTecnicaMaquinas;        
        var $pinoneriaCentroFichaTecnicaMaquinas;
        var $pinoneriaDerechoFichaTecnicaMaquinas;
        var $rpmMinutoFichaTecnicaMaquinas;
        var $minutoDisFichaTecnicaMaquinas;
        var $vueltasDiasFichaTecnicaMaquinas;
        var $vueltasRollosFichaTecnicaMaquinas;
        var $numeroRollosFichaTecnicaMaquinas;
        var $kilosRolloFichaTecnicaMaquinas;
        var $produccionHorasCienFichaTecnicaMaquinas;
        var $produccionHorasOchentaFichaTecnicaMaquinas;
        var $kilosTurnoDoceHorasFichaTecnicaMaquinas;
        var $rollosTurnoDoceHorasFichaTecnicaMaquinas;
        var $kilosTurnoOchoHorasFichaTecnicaMaquinas;
        var $rollosTurnoOchoHorasFichaTecnicaMaquinas;
        var $anchoCrudoFichaTecnicaMaquinas;
        var $rendimientoCrudoFichaTecnicaMaquinas;
        var $pesoCrudoFichaTecnicaMaquinas;
        
        
        
         //Datos de la pestaÃ±a Maquinas Pistas
        var $idFichaTecnicaMaquinasPistas;
        var $FichaTecnicaMaquinas_idFichaTecnicaMaquinas;
        var $numeroFichaTecnicaMaquinasPistas;
        var $profundidadFichaTecnicaMaquinasPistas;
        var $puntosFichaTecnicaMaquinasPistas;
        var $metroRevolucionFichaTecnicaMaquinasPistas;
        var $longMallaIzquierdoFichaTecnicaMaquinasPistas;
        var $nonioVueltasFichaTecnicaMaquinasPistas;
        var $nonioNumeroFichaTecnicaMaquinasPistas;
        var $tensionHiloFichaTecnicaMaquinasPistas;
        var $descripcionFichaTecnicaMaquinasPistas;
        
        
        //Datos de Variantes, pinta
        var $idFichaTecnicaPinta;
        //Datos Variantes Color tela
        var $idFichaTecnicaColorTela;
        var $colorDigitadoFichaTecnicaColorTela;
        var $Tercero_idTercero; //se necesita el codigoAlterno1Tercero
        var $Composicion_idFolder; 
        var $paginaFichaTecnicaColorTela; 
        var $codigoAcabadoFichaTecnicaColorTela; 
        var $procesoFichaTecnicaColorTela; 
        
        
        
        //Datos de hilaza
        var $idFichaTecnicaHilaza;
        var $idFichaTecnicaHilazasAux;
        var $numeroHiloFichaTecnicaHilaza;
        var $pesoInicialFichaTecnicaHilaza;
        var $pesoFinalFichaTecnicaHilaza;
        var $alimentadoresFichaTecnicaHilaza;
        var $totalHiloFichaTecnicaHilaza;
        var $consumoHiloFichaTecnicaHilaza;
        var $Hilaza_idProducto;
//        var $nombreComposicionHilaza;
//        var $tipoHiloFichaTecnicaHilaza;
//        var $Tercero_idProveedorHilo;
//        var $Producto_idProducto;
        
//        var $idFichaTecnicaHilazaComposicion;
//        var $Composicion_idComposicionHilaza;
//        var $FichaTecnicaHilaza_idFichaTecnicaHilaza;
//        var $porcentajeFichaTecnicaHilazaComposicion;

        
        //Datos de PLANILLA EFICIENCIA (Ya no se ve.)
        var $rpmMinutoFichaTecnica;
        var $minutoDisFichaTecnica;
        var $vueltasDiasFichaTecnica;
        var $vueltasRollosFichaTecnica;
        var $numeroRollosFichaTecnica;
        var $kilosRolloFichaTecnica;
        var $produccionHorasCienFichaTecnica;
        var $produccionHorasOchentaFichaTecnica;
        var $kilosTurnoDoceHorasFichaTecnica;
        var $rollosTurnoDoceHorasFichaTecnica;
        var $kilosTurnoOchoHorasFichaTecnica;
        var $rollosTurnoOchoHorasFichaTecnica;
        
        var $TemporadaInspiracion_idTemporadaInspiracion;
        var $totalAlimentadoresFichaTecnica;
        var $consumoTotalMuestraFichaTecnica;
        var $sumaConsumoFichaTecnica;
        
        var $productoTerminadoFichaTecnica;
        var $materiaPrimaFichaTecnica;
        
        
        var $idFichaTecnicaNotas;
        var $fechaFichaTecnicaNotas;
        var $horaFichaTecnicaNotas;
        var $SegLogin_idUsuario;
        var $textoFichaTecnicaNotas;
        
        //Pinta Color
        var $idFichaTecnicaPintaColor;
        var $Color_idPintaColor;
        var $idFichaTecnicaPintaAux;
        var $pasadasFichaTecnicaPintaColor;
        var $Predominante_idColor;
        
        
        //Con esta vamos a validar que no elimine Las medidas si en parametros de pdccion no esta seleccionado la opcion de medidas
        var $PestanaMedidasParametrosProduccion;
        
        
        
        
        // Operaciones
	
	/* CONSTRUCTOR DE LA CLASE */
	function FichaTecnica()
	{
		/*Incluimos el fichero de la clase Db*/ 
		require_once('db.class.php'); 
		/*Incluimos el fichero de la clase Conf*/ 
		require_once('conf.class.php'); 
        
                set_time_limit(0);
		
		$this->idFichaTecnica = 0;		
		$this->tipoFichaTecnica = '';		
		$this->referenciaBaseFichaTecnica = '';
		$this->nombreLargoFichaTecnica = '';
		$this->nombreCortoFichaTecnica = '';
		$this->codigoAlternoFichaTecnica = '';
		$this->numeroMoldeFichaTecnica = '';
		$this->areaMoldeFichaTecnica = '';
		$this->disenadorFichaTecnica = '';
		$this->SegLogin_idUsuarioCrea = 0;				
		$this->fechaCreacionFichaTecnica = '';
		$this->SegLogin_idUsuarioAprueba = 0;
		$this->fechaAprobacionFichaTecnica = '';
		$this->SegLogin_idUsuarioModifica = 0;
		$this->fechaModificacionFichaTecnica = '';
		$this->estadoFichaTecnica = '';
		$this->conceptoTelaFichaTecnica = '';
		$this->cantidadContenidaFichaTecnica = 0;
		$this->Tercero_idCliente = 0;
		$this->Marca_idMarca = 0;
		$this->referenciaClienteFichaTecnica = '';
		$this->TipoNegocio_idTipoNegocio = 0;
		$this->TipoProducto_idTipoProducto = 0;
		$this->Temporada_idTemporada = 0;
		$this->EstadoConservacion_idEstadoConservacion = 0;
		$this->Categoria_idCategoria = 0;
		$this->CaracteristicasHilaza_idCaracteristicasHilaza = 0;
		$this->UnidadMedida_idCompra = 0;
		$this->UnidadMedida_idVenta = 0;
		$this->Pais_idPais = 0;
		$this->DescripcionBase_idDescripcionBase = 0;
		$this->ConstruccionHilo_idContruccionHilo = 0;
		$this->ClienteObjetivo_idClienteObjetivo = 0;
                $this->EsquemaProducto_idEsquemaProducto = 0;      
		$this->Clima_idClima = 0;
		$this->Difusion_idDifusion = 0;
		$this->Estrategia_idEstrategia = 0;
		$this->Seccion_idSeccion = 0;
		$this->Evento_idEvento = 0;
		$this->PosicionArancelaria_idPosicionArancelaria = 0;                  
		  		
		$this->precioFichaTecnica = 0;
		$this->costoFichaTecnica = 0;
		$this->ivaIncluidoFichaTecnica = 0;
		$this->acumulaPuntosFichaTecnica = 0;
		$this->redimePuntosFichaTecnica = 0;
                $this->SegmentoOperacion_idSegmentoOperacion = 0;

		$this->costoMaterialFichaTecnica = 0;
		$this->costoProcesoFichaTecnica = 0;
		$this->costoMOFichaTecnica = 0;
		$this->costoPrimoFichaTecnica = 0;
		$this->costoCIFFichaTecnica = 0;
		$this->subtotalFichaTecnica = 0;
		$this->costoServicioFichaTecnica = 0;
		$this->costoFijoFichaTecnica = 0;
		$this->costoUnitarioFichaTecnica = 0;
		$this->estadoCostoFichaTecnica = '';
		$this->fechaAprobacionCostoFichaTecnica = '';
		$this->tasaCambioCostoFichaTecnica = '';
		$this->observacionCostosFichaTecnica = '';
		
		$this->observacionesFichaTecnica = '';
		$this->observacionCotizacionFichaTecnica = '';
		$this->observacionConstruccionFichaTecnica = '';
		$this->Composicion_idComposicion = 0;
		$this->imagenMedida1FichaTecnica = '';
		$this->imagenMedida2FichaTecnica = '';
                $this->samCosteoFichaTecnica = 0;

		// datos de Colores
		$this->idFichaTecnicaColor = array();
		$this->Color_idColor = array();
		$this->codigoColorClienteFichaTecnicaColor = array();
		$this->nombreEspecialFichaTecnicaColor = array();
		$this->cantidadFichaTecnicaColor = array();
		
		// datos de Tallas
		$this->idFichaTecnicaTalla = array();
		$this->Talla_idTalla = array();
		$this->codigoTallaClienteFichaTecnicaTalla = array();
		$this->BaseMedidaFichaTecnicaTalla = array();
		$this->curvaFichaTecnicaTalla = array();
		
		// datos de Tallas Complemento
		$this->idFichaTecnicaTallaComplemento = array();
		$this->TallaComplemento_idTallaComplemento = array();
		$this->codigoTallaClienteFichaTecnicaTallaComplemento = array();
		
		
		// Datos de las Imagenes
		$this->idFichaTecnicaImagen = array();
		$this->codigoAlternoFichaTecnicaImagen = array();
		$this->nombreFichaTecnicaImagen = array();
		$this->imagenFichaTecnicaImagen = array();
		$this->observacionFichaTecnicaImagen = array();
		
		// Datos de las piezas
		$this->idFichaTecnicaPieza = array();
		$this->codigoAlternoFichaTecnicaPieza = array();
		$this->nombreFichaTecnicaPieza = array();
		$this->imagenFichaTecnicaPieza = array();
		$this->observacionFichaTecnicaPieza = array();
	
	
		// Datos de los detalles de construccion
		$this->idFichaTecnicaConstruccion = array();
		$this->codigoAlternoFichaTecnicaConstruccion = array();
		$this->nombreFichaTecnicaConstruccion = array();
		$this->imagenFichaTecnicaConstruccion = array();
		$this->observacionFichaTecnicaConstruccion = array();
		
		// datos de las especificaciones
		$this->idFichaTecnicaEspecificacion = array() ;
		//$this->tipoFichaTecnicaEspecificacion = array() ;
		$this->nombreFichaTecnicaEspecificacion = array() ;
		$this->especificacionFichaTecnicaEspecificacion  = array();
		$this->observacionFichaTecnicaEspecificacion = array() ;
	
		// datos de componentes
		$this->idFichaTecnicaComponente = array() ;
		$this->componenteFichaTecnicaComponente = array() ;
		$this->ComponenteFichaTecnica_idComponenteFichaTecnica = array() ;
		$this->tipoFichaTecnicaComponente = array() ;
		$this->tejidoFichaTecnicaComponente = array() ;
		$this->pesoFichaTecnicaComponente = array() ;
		$this->composicionFichaTecnicaComponente = array() ;
		$this->imagenFichaTecnicaComponente = array() ;

		//Datos de Materiales
		$this->CentroProduccion_idCentroProduccion = array();
		$this->idFichaTecnicaMaterial = array();
		$this->imagenFichaTecnicaMaterial = array();
		$this->Producto_idMaterial = array();
		$this->Color_idColorMaterial = array();
		$this->Talla_idTallaMaterial = array();
		$this->TallaComplemento_idTallaComplementoMaterial = array();
		$this->noAfectaCostoMaterial = array();
		$this->referenciaProducto = array();
		$this->nombreLargoProducto = array();
		$this->tipoProductoMaterial = array();
		$this->porcentajeDesperdicioMaterial = array();
		$this->consumoMaterialProductoMaterial = array();
		$this->consumoMaterialConversionProductoMaterial = array();
		$this->consumoProductoProductoMaterial = array();
		$this->ParteMedida_idParteMedida = array();
		$this->observacionProductoMaterial = array();
		$this->costoUnitarioAprobadoProductoMaterial = array();
        
                //Datos de Materiales Adicionales
                $this->idFichaTecnicaMaterialAdicional = array();
                $this->nombreFichaTecnicaMaterialAdicional = array();
                $this->consumoFichaTecnicaMaterialAdicional = array();
                $this->costoUnitarioFichaTecnicaMaterialAdicional = array();    

		// Materiales de empaque de la minificha
		$this->idFichaTecnicaEmpaque = array();
		$this->materialFichaTecnicaEmpaque = array();
		$this->valorFichaTecnicaEmpaque = array();
		$this->observacionFichaTecnicaEmpaque = array();
				
		// Datos de Combinaciones
		$this->idFichaTecnicaCombinacion = array();
		$this->nombreFichaTecnicaCombinacion = array();
		$this->Color_idBase = array();
		$this->Color_idCombinacion = array();
		
		// Datos de Medidas
		$this->idFichaTecnicaMedida = array();
		$this->ParteMedida_idParteMedidaMed = array();
		$this->codigoFichaTecnicaMedidaTalla = array();
		$this->observacionFichaTecnicaMedida  = array();
		$this->toleranciaFichaTecnicaMedida = array();
		$this->escalaFichaTecnicaMedida = array();
		$this->idFichaTecnicaMedidaTalla  = array();
		$this->tipoFichaTecnicaMedida = array();
		$this->idMedida = array();
		$this->tipoMedida = array();
		$this->Talla_idTallaMed = array();
		$this->valorFichaTecnicaMedidaTalla = array();
	
		// Datos de las Adjuntos
		$this->idFichaTecnicaAdjunto = array();
		$this->codigoAlternoFichaTecnicaAdjunto = array();
		$this->versionFichaTecnicaAdjunto = array();
		$this->fechaFichaTecnicaAdjunto = array();
		$this->nombreFichaTecnicaAdjunto = array();
		$this->archivoFichaTecnicaAdjunto = array();
		$this->observacionFichaTecnicaAdjunto = array();
		
		// Datos de los centros de produccion (ruta de procesos)
		$this->afectaMaterialFichaTecnicaCentroProduccion = array();
		$this->afectaListaOperacionFichaTecnicaCentroProduccion = array();
		$this->ordenFichaTecnicaCentroProduccion = array();
		$this->idFichaTecnicaCentroProduccion = array();
		$this->CentroProduccion_idCentroProduccion_2 = array();
		$this->Tercero_idProveedorPorDefecto = array();
		$this->perdidaTintoreriaFichaTecnicaCentroProduccion = array();
		$this->costoEstimadoFichaTecnicaCentroProduccion = array();
		$this->observacionFichaTecnicaCentroProduccion = array();
		
		// datos de aprobacion de los costos estandar
		$this->idFichaTecnicaProceso = array();
		$this->costoUnitarioAprobadoFichaTecnicaProceso = array();
		$this->idFichaTecnicaOperacion = array();
		$this->costoUnitarioAprobadoFichaTecnicaOperacion = array();
		$this->idFichaTecnicaCostoIndirecto = array();
		$this->costoUnitarioAprobadoFichaTecnicaCostoIndirecto = array();
		$this->idFichaTecnicaCostoAdicional = array();
		$this->costoUnitarioAprobadoFichaTecnicaCostoAdicional = array();
		$this->idFichaTecnicaPrecioFicha = array();
		$this->precioUnitarioAprobadoFichaTecnicaPrecioFicha = array();
        
                //Campos de la pestaÃ±a imagenes
                $this->idFichaTecnicaCostoEstandarImagen = array();
                $this->codigoAlternoFichaTecnicaCostoEstandarImagen = array();
                $this->nombreFichaTecnicaCostoEstandarImagen = array();
                $this->imagenFichaTecnicaCostoEstandarImagen = array();
                $this->observacionFichaTecnicaCostoEstandarImagen = array();   
		
                //Datos de calibre 
                $this->CalibreHilo_idCalibreHilo = 0;
                
                //Datos de Logistica
                $this->pesoBrutoFichaTecnica = 0;
                $this->pesoNetoFichaTecnica = 0;
                $this->altoFichaTecnica  = 0;
                $this->anchoFichaTecnica  = 0;
                $this->profundidadFichaTecnica  = 0;
                $this->diasReposicionFichaTecnica = 0;
                $this->puntoPedidoFichaTecnica = 0;
                $this->cantidadSeguridadFichaTecnica = 0;
                $this->stockMinimoFichaTecnica = 0;
                $this->stockMaximoFichaTecnica = 0;
                
                //Datos de Maquina CRUDO
                $this->Composicion_idComposicionFichaTecnica = 0;
                $this->anchoCrudoFichaTecnica = 0;
                $this->rendimientoCrudoFichaTecnica =0 ;
                $this->pesoCrudoFichaTecnica = 0;
                //Datos de Maquina ACABADO
                $this->anchoAcabadoRamaFichaTecnica = 0;
                $this->encogimientoAnchoFichaTecnica = 0;
                $this->rendimientoSalidaRamaFichaTecnica = 0;
                $this->encogimientoLargoFichaTecnica = 0;
                $this->pesoTerminadoRamaFichaTecnica =0 ;
                $this->porcentajeViroFichaTecnica = 0;
                $this->rendimientoReposoFichaTecnica = 0;
                $this->perdidaTintoreriaFichaTecnica = 0;
                $this->pesoReposoFichaTecnica = 0;
                $this->perdidaTotalProcesoFichaTecnica = 0;
                $this->anchoClienteFichaTecnica = 0;
                $this->toleranciaPermitidaAnchoFichaTecnica = 0;
                $this->elongacionAnchoFichaTecnica = 0;
                $this->toleranciaPermitidaRendimientoFichaTecnica =0 ;
                $this->elongacionLargoFichaTecnica = 0;
                $this->pillingFichaTecnica = 0;           
                
                $this->toleranciaTintoreriaPermitidaAnchoFichaTecnica =0 ;
                $this->toleranciaTintoreriaPermitidaRendimientoFichaTecnica =0;
                
                //Datos de Maquina TINTORERIA
                $this->idFichaTecnicaTintoreria= array();
                $this->nombreFichaTecnicaTintoreria= array();
                $this->cantidadFichaTecnicaTintoreria = array();
               
                
                //Datos de Variante Pinta
                $this->idFichaTecnicaPinta = array();
                $this->Pinta_idPinta = array();
                $this->idFichaTecnicaPintaColor= array();
                $this->Color_idPintaColor= array();
                $this->idFichaTecnicaPintaAux=0;
                $this->pasadasFichaTecnicaPintaColor = array();
                $this->Predominante_idColor = array();
                
                //Datos de Variante Color Tela
                $this->idFichaTecnicaColorTela = array();
                $this->colorDigitadoFichaTecnicaColorTela = array();
                $this->Tono_idTono = array();
                $this->Tercero_idTercero = array();
                $this->Composicion_idFolder = array();
                $this->paginaFichaTecnicaColorTela = array();
                $this->codigoAcabadoFichaTecnicaColorTela = array();
                $this->procesoFichaTecnicaColorTela = array();
                
                 //Datos de PLANILLA EFICIENCIA
                 $this->rpmMinutoFichaTecnica = 0;
                 $this->minutoDisFichaTecnica = 0;
                 $this->vueltasDiasFichaTecnica = 0;
                 $this->vueltasRollosFichaTecnica = 0;
                 $this->numeroRollosFichaTecnica = 0;
                 $this->kilosRolloFichaTecnica = 0;
                 $this->produccionHorasCienFichaTecnica = 0;
                 $this->produccionHorasOchentaFichaTecnica = 0;
                 $this->kilosTurnoDoceHorasFichaTecnica = 0;
                 $this->rollosTurnoDoceHorasFichaTecnica = 0;
                 $this->kilosTurnoOchoHorasFichaTecnica = 0;
                 $this->rollosTurnoOchoHorasFichaTecnica = 0;
                
                 $this->TemporadaInspiracion_idTemporadaInspiracion = 0;
                 $this->totalAlimentadoresFichaTecnica = 0;
                 $this->consumoTotalMuestraFichaTecnica = 0;
                 $this->sumaConsumoFichaTecnica = 0;
                 $this->productoTerminadoFichaTecnica = 0;
                 $this->materiaPrimaFichaTecnica = 0;
          
                                 
                //Datos de Hilaza
                $this->idFichaTecnicaHilaza = array();
                $this->idFichaTecnicaHilazasAux = 0;
                $this->numeroHiloFichaTecnicaHilaza = array();
                $this->FichaTecnicaHilaza_idFichaTecnicaHilaza = array();
                $this->pesoInicialFichaTecnicaHilaza = array();
                $this->pesoFinalFichaTecnicaHilaza = array();
                $this->alimentadoresFichaTecnicaHilaza = array();
                $this->totalHiloFichaTecnicaHilaza = array();
                $this->consumoHiloFichaTecnicaHilaza = array();
                $this->Hilaza_idProducto = array();
           
                
                //Datos de la pestaÃ±a Maquinas
                $this->idFichaTecnicaMaquinas = array();
                $this->idFichaTecnicaMaquinasAux = 0;
                $this->RecursoProduccion_idRecursoProduccion= array();
                $this->porDefectoFichaTecnicaMaquinas= array();
                $this->numeroDientesIzquierdosFichaTecnicaMaquinas= array();
                $this->numeroDientesCentroFichaTecnicaMaquinas= array();
                $this->numeroDientesDerechoFichaTecnicaMaquinas= array();
                $this->tiempoFichaTecnicaMaquinas= array();
                $this->mallasCrudoFichaTecnicaMaquinas= array();
                $this->columnasCrudoFichaTecnicaMaquinas= array();
                $this->puntadaAlturaFichaTecnicaMaquinas= array();
                $this->alturaDialFichaTecnicaMaquinas= array();
                $this->elongacionAnchoFichaTecnicaMaquinas= array();
                $this->elongacionLargoFichaTecnicaMaquinas= array();
                $this->anchoExpanderFichaTecnicaMaquinas= array();
                $this->recobradorFichaTecnicaMaquinas= array();
                $this->anchoExpanderFichaTecnicaMaquinas= array();
                $this->pesoRodajaMaquinaRealFichaTecnicaMaquinas= array();
                $this->pesoRodajaMaquinaTeoricaFichaTecnicaMaquinas= array();
                $this->notasFichaTecnicaMaquinas= array();
                $this->opcionRecobradorFichaTecnicaMaquinas= array();
                $this->gradosFichaTecnicaMaquinas= array();
                $this->profundidadFichaTecnicaMaquinas= array();
                $this->pinoneriaIzquierdoFichaTecnicaMaquinas= array();
                $this->pinoneriaCentroFichaTecnicaMaquinas= array();
                $this->pinoneriaDerechoFichaTecnicaMaquinas= array();
                $this->rpmMinutoFichaTecnicaMaquinas= array();
                $this->minutoDisFichaTecnicaMaquinas= array();
                $this->vueltasDiasFichaTecnicaMaquinas= array();
                $this->vueltasRollosFichaTecnicaMaquinas= array();
                $this->numeroRollosFichaTecnicaMaquinas= array();
                $this->kilosRolloFichaTecnicaMaquinas= array();
                $this->produccionHorasCienFichaTecnicaMaquinas= array();
                $this->produccionHorasOchentaFichaTecnicaMaquinas= array();
                $this->kilosTurnoDoceHorasFichaTecnicaMaquinas= array();
                $this->rollosTurnoDoceHorasFichaTecnicaMaquinas= array();
                $this->kilosTurnoOchoHorasFichaTecnicaMaquinas= array();
                $this->rollosTurnoOchoHorasFichaTecnicaMaquinas= array();
                $this->anchoCrudoFichaTecnicaMaquinas= array();
                $this->rendimientoCrudoFichaTecnicaMaquinas= array();
                $this->pesoCrudoFichaTecnicaMaquinas= array();
                
                
                //Datos de la pestaÃ±a Maquinas Pistas
                $this->idFichaTecnicaMaquinasPistas = array();
                $this->FichaTecnicaMaquinas_idFichaTecnicaMaquinas= array();
                $this->numeroFichaTecnicaMaquinasPistas= array();
                $this->puntosFichaTecnicaMaquinasPistas= array();
                $this->metroRevolucionFichaTecnicaMaquinasPistas= array();
                $this->longMallaIzquierdoFichaTecnicaMaquinasPistas= array();
                $this->nonioVueltasFichaTecnicaMaquinasPistas= array();
                $this->nonioNumeroFichaTecnicaMaquinasPistas= array();
                $this->tensionHiloFichaTecnicaMaquinasPistas= array();
                $this->descripcionFichaTecnicaMaquinasPistas= array();
                
                $this->idFichaTecnicaNotas = array();
                $this->fechaFichaTecnicaNotas = array();
                $this->horaFichaTecnicaNotas = array();
                $this->SegLogin_idUsuario = array();
                $this->textoFichaTecnicaNotas = array();
                
                $this->PestanaMedidasParametrosProduccion = 0;
                
	}
	
	// adiciona los datos generales de la ficha tecnica y cada una de sus tablas de detalle
	function AdicionarFichaTecnica()
	{
		/*Creamos una query sencilla*/ 
		$sql="insert into FichaTecnica(
                                        tipoFichaTecnica,
					referenciaBaseFichaTecnica, 
					nombreLargoFichaTecnica, 
					nombreCortoFichaTecnica, 
					codigoAlternoFichaTecnica, 
					numeroMoldeFichaTecnica, 
					areaMoldeFichaTecnica,
					disenadorFichaTecnica,
					SegLogin_idUsuarioCrea,
					fechaCreacionFichaTecnica,
					SegLogin_idUsuarioAprueba,
					fechaAprobacionFichaTecnica,					
					SegLogin_idUsuarioModifica,
					fechaModificacionFichaTecnica,					
					estadoFichaTecnica, 
					conceptoTelaFichaTecnica, 
					cantidadContenidaFichaTecnica,
					Tercero_idCliente, 
					Marca_idMarca,
					referenciaClienteFichaTecnica, 
					TipoNegocio_idTipoNegocio, 
					TipoProducto_idTipoProducto, 
					Temporada_idTemporada, 
					EstadoConservacion_idEstadoConservacion, 
					Categoria_idCategoria, 
					CaracteristicasHilaza_idCaracteristicasHilaza, 
					UnidadMedida_idCompra, 
					UnidadMedida_idVenta, 
					Pais_idPais,
					DescripcionBase_idDescripcionBase,
					ConstruccionHilo_idContruccionHilo,
					ClienteObjetivo_idClienteObjetivo,
					EsquemaProducto_idEsquemaProducto,
					Clima_idClima,
					Difusion_idDifusion,
					Estrategia_idEstrategia,
					Seccion_idSeccion,
					Evento_idEvento,
                                        CalibreHilo_idCalibreHilo,
					PosicionArancelaria_idPosicionArancelaria,					
					observacionesFichaTecnica, 
					observacionCotizacionFichaTecnica,
					observacionConstruccionFichaTecnica,
					Composicion_idComposicion,
					imagenMedida1FichaTecnica,
					imagenMedida2FichaTecnica,
					precioFichaTecnica,
					costoFichaTecnica,
					ivaIncluidoFichaTecnica,
					acumulaPuntosFichaTecnica,
					redimePuntosFichaTecnica,
                                        SegmentoOperacion_idSegmentoOperacion,
                                        stockMaximoFichaTecnica,
                                        stockMinimoFichaTecnica,
                                        pesoBrutoFichaTecnica,
                                        pesoNetoFichaTecnica,
                                        altoFichaTecnica,
                                        anchoFichaTecnica,
                                        profundidadFichaTecnica,
                                        diasReposicionFichaTecnica,
                                        puntoPedidoFichaTecnica,
                                        cantidadSeguridadFichaTecnica,
                                        Composicion_idComposicionFichaTecnica,
                                        anchoCrudoFichaTecnica,
                                        rendimientoCrudoFichaTecnica,
                                        pesoCrudoFichaTecnica,
                                        anchoAcabadoRamaFichaTecnica,
                                        encogimientoAnchoFichaTecnica,
                                        rendimientoSalidaRamaFichaTecnica,
                                        encogimientoLargoFichaTecnica,
                                        pesoTerminadoRamaFichaTecnica,
                                        porcentajeViroFichaTecnica,
                                        rendimientoReposoFichaTecnica,
                                        perdidaTintoreriaFichaTecnica,
                                        pesoReposoFichaTecnica,
                                        perdidaTotalProcesoFichaTecnica,
                                        anchoClienteFichaTecnica,
                                        toleranciaPermitidaAnchoFichaTecnica,
                                        elongacionAnchoFichaTecnica,
                                        toleranciaPermitidaRendimientoFichaTecnica,
                                        elongacionLargoFichaTecnica,
                                        pillingFichaTecnica,
                                        rpmMinutoFichaTecnica,
                                        minutoDisFichaTecnica,
                                        vueltasDiasFichaTecnica,
                                        vueltasRollosFichaTecnica,
                                        numeroRollosFichaTecnica,
                                        kilosRolloFichaTecnica,
                                        produccionHorasCienFichaTecnica,
                                        produccionHorasOchentaFichaTecnica,
                                        kilosTurnoDoceHorasFichaTecnica,
                                        rollosTurnoDoceHorasFichaTecnica,
                                        kilosTurnoOchoHorasFichaTecnica,
                                        rollosTurnoOchoHorasFichaTecnica,
                                        toleranciaTintoreriaPermitidaAnchoFichaTecnica,
                                        toleranciaTintoreriaPermitidaRendimientoFichaTecnica,
                                        TemporadaInspiracion_idTemporadaInspiracion,
                                        totalAlimentadoresFichaTecnica,
                                        consumoTotalMuestraFichaTecnica,
                                        sumaConsumoFichaTecnica,
                                        productoTerminadoFichaTecnica,
                                        materiaPrimaFichaTecnica)
			       values (
					 '$this->tipoFichaTecnica', 
					 '$this->referenciaBaseFichaTecnica', 
					 '$this->nombreLargoFichaTecnica', 
					 '$this->nombreCortoFichaTecnica', 
					 '$this->codigoAlternoFichaTecnica', 
					 '$this->numeroMoldeFichaTecnica', 
					 '$this->areaMoldeFichaTecnica',
					 '$this->disenadorFichaTecnica',
					 '$this->SegLogin_idUsuarioCrea',
					 '$this->fechaCreacionFichaTecnica',
					 '$this->SegLogin_idUsuarioAprueba',
					 '$this->fechaAprobacionFichaTecnica',
					 '$this->SegLogin_idUsuarioModifica',
					 '$this->fechaModificacionFichaTecnica',
					 '$this->estadoFichaTecnica', 
					 '$this->conceptoTelaFichaTecnica', 
					 '$this->cantidadContenidaFichaTecnica',
					 '$this->Tercero_idCliente', 
					 '$this->Marca_idMarca',
					 '$this->referenciaClienteFichaTecnica', 
					 '$this->TipoNegocio_idTipoNegocio', 
					 '$this->TipoProducto_idTipoProducto', 
					 '$this->Temporada_idTemporada', 
					 '$this->EstadoConservacion_idEstadoConservacion', 
					 '$this->Categoria_idCategoria', 
					 '$this->CaracteristicasHilaza_idCaracteristicasHilaza', 
					 '$this->UnidadMedida_idCompra', 
					 '$this->UnidadMedida_idVenta', 
					 '$this->Pais_idPais', 
					 '$this->DescripcionBase_idDescripcionBase', 
					 '$this->ConstruccionHilo_idContruccionHilo', 
					 '$this->ClienteObjetivo_idClienteObjetivo',
                                         '$this->EsquemaProducto_idEsquemaProducto',
					 '$this->Clima_idClima', 
					 '$this->Difusion_idDifusion', 
					 '$this->Estrategia_idEstrategia', 
					 '$this->Seccion_idSeccion', 
					 '$this->Evento_idEvento', 
                                         '$this->CalibreHilo_idCalibreHilo',
					 '$this->PosicionArancelaria_idPosicionArancelaria',
					 '$this->observacionesFichaTecnica',
					 '$this->observacionCotizacionFichaTecnica',
					 '$this->observacionConstruccionFichaTecnica',
					 '$this->Composicion_idComposicion',
					 '$this->imagenMedida1FichaTecnica',
					 '$this->imagenMedida2FichaTecnica',
					 '$this->precioFichaTecnica',
					 '$this->costoFichaTecnica',
					 '$this->ivaIncluidoFichaTecnica',
					 '$this->acumulaPuntosFichaTecnica',
					 '$this->redimePuntosFichaTecnica',                                          
					 '$this->SegmentoOperacion_idSegmentoOperacion',
                                         '$this->stockMaximoFichaTecnica',
                                         '$this->stockMinimoFichaTecnica',
                                         '$this->pesoBrutoFichaTecnica',
                                         '$this->pesoNetoFichaTecnica',
                                         '$this->altoFichaTecnica',
                                         '$this->anchoFichaTecnica',
                                         '$this->profundidadFichaTecnica',
                                         '$this->diasReposicionFichaTecnica',
                                         '$this->puntoPedidoFichaTecnica',
                                         '$this->cantidadSeguridadFichaTecnica',    
                                         '$this->Composicion_idComposicionFichaTecnica',
                                         '$this->anchoCrudoFichaTecnica',
                                         '$this->rendimientoCrudoFichaTecnica',
                                         '$this->pesoCrudoFichaTecnica',
                                         '$this->anchoAcabadoRamaFichaTecnica',
                                         '$this->encogimientoAnchoFichaTecnica',
                                         '$this->rendimientoSalidaRamaFichaTecnica',
                                         '$this->encogimientoLargoFichaTecnica',
                                         '$this->pesoTerminadoRamaFichaTecnica',
                                         '$this->porcentajeViroFichaTecnica',
                                         '$this->rendimientoReposoFichaTecnica',
                                         '$this->perdidaTintoreriaFichaTecnica',
                                         '$this->pesoReposoFichaTecnica',
                                         '$this->perdidaTotalProcesoFichaTecnica',
                                         '$this->anchoClienteFichaTecnica',
                                         '$this->toleranciaPermitidaAnchoFichaTecnica',
                                         '$this->elongacionAnchoFichaTecnica',
                                         '$this->toleranciaPermitidaRendimientoFichaTecnica',
                                         '$this->elongacionLargoFichaTecnica',
                                         '$this->pillingFichaTecnica',   
                                         '$this->rpmMinutoFichaTecnica',
                                         '$this->minutoDisFichaTecnica',
                                         '$this->vueltasDiasFichaTecnica',
                                         '$this->vueltasRollosFichaTecnica',
                                         '$this->numeroRollosFichaTecnica',
                                         '$this->kilosRolloFichaTecnica',
                                         '$this->produccionHorasCienFichaTecnica',
                                         '$this->produccionHorasOchentaFichaTecnica',
                                         '$this->kilosTurnoDoceHorasFichaTecnica',
                                         '$this->rollosTurnoDoceHorasFichaTecnica',
                                         '$this->kilosTurnoOchoHorasFichaTecnica',
                                         '$this->rollosTurnoOchoHorasFichaTecnica',
                                         '$this->toleranciaTintoreriaPermitidaAnchoFichaTecnica',
                                         '$this->toleranciaTintoreriaPermitidaRendimientoFichaTecnica',
                                         '$this->TemporadaInspiracion_idTemporadaInspiracion',
                                         '$this->totalAlimentadoresFichaTecnica',
                                         '$this->consumoTotalMuestraFichaTecnica',
                                         '$this->sumaConsumoFichaTecnica',
                                         '$this->productoTerminadoFichaTecnica',
                                         '$this->materiaPrimaFichaTecnica');"; 
                                             
                
                
                
		/*Ejecutamos la query*/ 
		//echo ($sql); 
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
		
		// ocnsultamos el id de la nueva ficha insertada para tomerlo en la grabacion de los detalles
		$this->ConsultarIdFichaTecnica("referenciaBaseFichaTecnica = '$this->referenciaBaseFichaTecnica' and 
					nombreLargoFichaTecnica = '$this->nombreLargoFichaTecnica' and 
					nombreCortoFichaTecnica = '$this->nombreCortoFichaTecnica' and 
					codigoAlternoFichaTecnica = '$this->codigoAlternoFichaTecnica' and 
					numeroMoldeFichaTecnica = '$this->numeroMoldeFichaTecnica' and 
					disenadorFichaTecnica = '$this->disenadorFichaTecnica' and 
					estadoFichaTecnica = '$this->estadoFichaTecnica' ", "");
		
		
		//	GRABAMOS Las Maquinas		
		$total=count($this->idFichaTecnicaMaquinas);
		for($i=0; $i < $total; $i++)
		{
			$this->AdicionarFichaTecnicaMaquinas($this->idFichaTecnica, $i);
		}
              
                //	GRABAMOS tintoreria		
		$total=count($this->idFichaTecnicaTintoreria);
		for($i=0; $i < $total; $i++)
		{
			$this->AdicionarFichaTecnicaTintoreria($this->idFichaTecnica, $i);
		} 
                
                //	GRABAMOS Hilaza		
                $total=count($this->idFichaTecnicaHilaza);
		for($i=0; $i < $total; $i++)
		{
			$this->AdicionarFichaTecnicaHilaza($this->idFichaTecnica, $i);
		} 
                
                //	GRABAMOS variante: Color tela		
		$total=count($this->idFichaTecnicaColorTela);
		for($i=0; $i < $total; $i++)
		{
			$this->AdicionarFichaTecnicaColorTela($this->idFichaTecnica, $i);
		}		
                
		//	GRABAMOS variante: Pinta		
		$total=count($this->idFichaTecnicaPinta);

		for($i=0; $i < $total; $i++)
		{
			$this->AdicionarFichaTecnicaPinta($this->idFichaTecnica, $i);
		}
		
		/*
		//	GRABAMOS LOS datos tecnicos		
		$total=count($this->idFichaTecnicaDatosTecnicos);

		for($i=0; $i < $total; $i++)
		{
			$this->AdicionarFichaTecnicaDatosTecnicos($this->idFichaTecnica, $i);
		}*/
		
		/*
			GRABAMOS LOS COLORES
		*/
		$total=count($this->idFichaTecnicaColor);

		for($i=0; $i < $total; $i++)
		{
			$this->AdicionarFichaTecnicaColor($this->idFichaTecnica, $i);
		}

		/*
			GRABAMOS LAS TALLAS
		*/
		$total=count($this->idFichaTecnicaTalla);

		for($i=0; $i < $total; $i++)
		{
			$this->AdicionarFichaTecnicaTalla($this->idFichaTecnica, $i);
		}
		
		$this->AdicionarFichaTecnicaTallaComplemento();
		
		$total=count($this->idFichaTecnicaImagen);

		for($i=0; $i < $total; $i++)
		{
			//echo('ingresa a adicionar ficha imagen');
			$this->AdicionarFichaTecnicaImagen($this->idFichaTecnica, $i);
		}
		
		
		/*
			GRABAMOS LAS PIEZAS
		*/
		$total=count($this->idFichaTecnicaPieza);

		for($i=0; $i < $total; $i++)
		{
			$this->AdicionarFichaTecnicaPieza($this->idFichaTecnica, $i);
		}
		
		
		/*
			GRABAMOS LOS DETALLES DE CONSTRUCCION
		*/
		$total=count($this->idFichaTecnicaConstruccion);

		for($i=0; $i < $total; $i++)
		{
			$this->AdicionarFichaTecnicaConstruccion($this->idFichaTecnica, $i);
		}
		
		/*
			GRABAMOS LAS ESPECIFICACIONES
		*/
		$total=count($this->idFichaTecnicaEspecificacion);

		for($i=0; $i < $total; $i++)
		{
			$this->AdicionarFichaTecnicaEspecificacion($this->idFichaTecnica, $i);
		}
		
		/*
			GRABAMOS LOS COMPONENTES
		*/
		$total=count($this->idFichaTecnicaComponente);

		for($i=0; $i < $total; $i++)
		{
			$this->AdicionarFichaTecnicaComponente($this->idFichaTecnica, $i);
		}
		
		/*
			GRABAMOS LOS MATERIALES DE EMPAQUE
		*/
		/*$total=count($this->idFichaTecnicaEmpaque);

		for($i=0; $i < $total; $i++)
		{
			$this->AdicionarFichaTecnicaEmpaque($this->idFichaTecnica, $i);
		}
		
		
		/*
			GRABAMOS LOS MATERIALES
		*/
		$total=count($this->idFichaTecnicaMaterial);
		for($i=0; $i < $total; $i++)
		{
			$this->AdicionarFichaTecnicaMaterial($this->idFichaTecnica, $i);
		}
		
		//GRABAMOS LOS MATERIALES ADICIONALES
		$total=count($this->idFichaTecnicaMaterialAdicional);
                for($i=0; $i < $total; $i++)
		{
                //    print_r($this->idFichaTecnicaMaterialAdicional) ;
                        $this->AdicionarFichaTecnicaMaterialAdicional($this->idFichaTecnica, $i);
		}
                //$this->AdicionarFichaTecnicaMaterialAdicional();
		
		/*
			GRABAMOS LAS COMBINACIONES
		*/
		$total=count($this->idFichaTecnicaCombinacion);
		for($i=0; $i < $total; $i++)
		{
			$this->AdicionarFichaTecnicaCombinacion($this->idFichaTecnica, $i);
		}
		
		
		/*
			GRABAMOS LAS MEDIDAS
		*/
		$total=count($this->idFichaTecnicaMedida);

		for($i=0; $i < $total; $i++)
		{
			$this->AdicionarFichaTecnicaMedida($this->idFichaTecnica, $i);
		}
				
		/*
			GRABAMOS LOS ARCHIVOS ADJUNTOS 
		*/
		$total=count($this->idFichaTecnicaAdjunto);

		for($i=0; $i < $total; $i++)
		{
			$this->AdicionarFichaTecnicaAdjunto($this->idFichaTecnica, $i);
		}
		
		
		/*
			GRABAMOS LOS CENTROS DE PRODUCCION
		*/
		$total=count($this->idFichaTecnicaCentroProduccion);

		for($i=0; $i < $total; $i++)
		{
			$this->AdicionarFichaTecnicaCentroProduccion($this->idFichaTecnica, $i);
		}
		return $this->idFichaTecnica;
    } 


	// modifica los datos generales de la ficha tecnica y cada una de sus tablas de detalle
function ModificarFichaTecnica()
	{
		/*Creamos una query sencilla*/ 
		$sql="update FichaTecnica 
				set tipoFichaTecnica = '$this->tipoFichaTecnica',
				        referenciaBaseFichaTecnica = '$this->referenciaBaseFichaTecnica',
					nombreLargoFichaTecnica = '$this->nombreLargoFichaTecnica',
					nombreCortoFichaTecnica = '$this->nombreCortoFichaTecnica',
					codigoAlternoFichaTecnica = '$this->codigoAlternoFichaTecnica',
					numeroMoldeFichaTecnica = '$this->numeroMoldeFichaTecnica',
					areaMoldeFichaTecnica = '$this->areaMoldeFichaTecnica',
					disenadorFichaTecnica = '$this->disenadorFichaTecnica',
					SegLogin_idUsuarioCrea = '$this->SegLogin_idUsuarioCrea',
					fechaCreacionFichaTecnica = '$this->fechaCreacionFichaTecnica',
					SegLogin_idUsuarioAprueba = '$this->SegLogin_idUsuarioAprueba',
					fechaAprobacionFichaTecnica = '$this->fechaAprobacionFichaTecnica',						
					SegLogin_idUsuarioModifica = '$this->SegLogin_idUsuarioModifica',
					fechaModificacionFichaTecnica = '$this->fechaModificacionFichaTecnica',			 			
					estadoFichaTecnica = '$this->estadoFichaTecnica',
					conceptoTelaFichaTecnica = '$this->conceptoTelaFichaTecnica',
					cantidadContenidaFichaTecnica = '$this->cantidadContenidaFichaTecnica',
					Tercero_idCliente = '$this->Tercero_idCliente',
					Marca_idMarca = '$this->Marca_idMarca',
					referenciaClienteFichaTecnica = '$this->referenciaClienteFichaTecnica',
					TipoNegocio_idTipoNegocio = '$this->TipoNegocio_idTipoNegocio',
					TipoProducto_idTipoProducto = '$this->TipoProducto_idTipoProducto',
					Temporada_idTemporada = '$this->Temporada_idTemporada',
					EstadoConservacion_idEstadoConservacion = '$this->EstadoConservacion_idEstadoConservacion',
					Categoria_idCategoria = '$this->Categoria_idCategoria',
					CaracteristicasHilaza_idCaracteristicasHilaza = '$this->CaracteristicasHilaza_idCaracteristicasHilaza',
					UnidadMedida_idCompra = '$this->UnidadMedida_idCompra',
					UnidadMedida_idVenta = '$this->UnidadMedida_idVenta',
					Pais_idPais = '$this->Pais_idPais',
					DescripcionBase_idDescripcionBase = '$this->DescripcionBase_idDescripcionBase',
					ConstruccionHilo_idContruccionHilo = '$this->ConstruccionHilo_idContruccionHilo',
					ClienteObjetivo_idClienteObjetivo = '$this->ClienteObjetivo_idClienteObjetivo',
                                        EsquemaProducto_idEsquemaProducto = '$this->EsquemaProducto_idEsquemaProducto',
					Clima_idClima = '$this->Clima_idClima', 
					Difusion_idDifusion = '$this->Difusion_idDifusion', 
					Estrategia_idEstrategia = '$this->Estrategia_idEstrategia',
					Seccion_idSeccion = '$this->Seccion_idSeccion', 
					Evento_idEvento = '$this->Evento_idEvento', 
                                        CalibreHilo_idCalibreHilo = '$this->CalibreHilo_idCalibreHilo',
					PosicionArancelaria_idPosicionArancelaria = '$this->PosicionArancelaria_idPosicionArancelaria',
					observacionesFichaTecnica = '$this->observacionesFichaTecnica',
					observacionCotizacionFichaTecnica = '$this->observacionCotizacionFichaTecnica',
					observacionConstruccionFichaTecnica = '$this->observacionConstruccionFichaTecnica',
					Composicion_idComposicion = '$this->Composicion_idComposicion',
					imagenMedida1FichaTecnica = '$this->imagenMedida1FichaTecnica',
					imagenMedida2FichaTecnica = '$this->imagenMedida2FichaTecnica',
					precioFichaTecnica = '$this->precioFichaTecnica',
					costoFichaTecnica = '$this->costoFichaTecnica',
					ivaIncluidoFichaTecnica = '$this->ivaIncluidoFichaTecnica',
					acumulaPuntosFichaTecnica = '$this->acumulaPuntosFichaTecnica',
					redimePuntosFichaTecnica = '$this->redimePuntosFichaTecnica',
					SegmentoOperacion_idSegmentoOperacion = '$this->SegmentoOperacion_idSegmentoOperacion',
                                        stockMaximoFichaTecnica = '$this->stockMaximoFichaTecnica',
                                        stockMinimoFichaTecnica = '$this->stockMinimoFichaTecnica',
                                        pesoBrutoFichaTecnica = '$this->pesoBrutoFichaTecnica',
                                        pesoNetoFichaTecnica = '$this->pesoNetoFichaTecnica',
                                        altoFichaTecnica = '$this->altoFichaTecnica',
                                        anchoFichaTecnica = '$this->anchoFichaTecnica',
                                        profundidadFichaTecnica = '$this->profundidadFichaTecnica',
                                        diasReposicionFichaTecnica = '$this->diasReposicionFichaTecnica',
                                        puntoPedidoFichaTecnica = '$this->puntoPedidoFichaTecnica',
                                        cantidadSeguridadFichaTecnica = '$this->cantidadSeguridadFichaTecnica',
                                        Composicion_idComposicionFichaTecnica =  '$this->Composicion_idComposicionFichaTecnica',
                                        anchoCrudoFichaTecnica =  '$this->anchoCrudoFichaTecnica',
                                        rendimientoCrudoFichaTecnica = '$this->rendimientoCrudoFichaTecnica',
                                        pesoCrudoFichaTecnica = '$this->pesoCrudoFichaTecnica',
                                        anchoAcabadoRamaFichaTecnica = '$this->anchoAcabadoRamaFichaTecnica',
                                        encogimientoAnchoFichaTecnica = '$this->encogimientoAnchoFichaTecnica',
                                        rendimientoSalidaRamaFichaTecnica = '$this->rendimientoSalidaRamaFichaTecnica',
                                        encogimientoLargoFichaTecnica = '$this->encogimientoLargoFichaTecnica',
                                        pesoTerminadoRamaFichaTecnica = '$this->pesoTerminadoRamaFichaTecnica',
                                        porcentajeViroFichaTecnica = '$this->porcentajeViroFichaTecnica',
                                        rendimientoReposoFichaTecnica = '$this->rendimientoReposoFichaTecnica',
                                        porcentajeViroFichaTecnica = '$this->porcentajeViroFichaTecnica',
                                        perdidaTintoreriaFichaTecnica = '$this->perdidaTintoreriaFichaTecnica',
                                        pesoReposoFichaTecnica = '$this->pesoReposoFichaTecnica',
                                        perdidaTotalProcesoFichaTecnica = '$this->perdidaTotalProcesoFichaTecnica',
                                        anchoClienteFichaTecnica = '$this->anchoClienteFichaTecnica',
                                        toleranciaPermitidaAnchoFichaTecnica = '$this->toleranciaPermitidaAnchoFichaTecnica',
                                        elongacionAnchoFichaTecnica = '$this->elongacionAnchoFichaTecnica',
                                        toleranciaPermitidaRendimientoFichaTecnica = '$this->toleranciaPermitidaRendimientoFichaTecnica',
                                        elongacionLargoFichaTecnica = '$this->elongacionLargoFichaTecnica',
                                        pillingFichaTecnica = '$this->pillingFichaTecnica',
                                        rpmMinutoFichaTecnica = '$this->rpmMinutoFichaTecnica',
                                        minutoDisFichaTecnica = '$this->minutoDisFichaTecnica',
                                        vueltasDiasFichaTecnica = '$this->vueltasDiasFichaTecnica',
                                        vueltasRollosFichaTecnica = '$this->vueltasRollosFichaTecnica',
                                        numeroRollosFichaTecnica = '$this->numeroRollosFichaTecnica',
                                        kilosRolloFichaTecnica = '$this->kilosRolloFichaTecnica',
                                        produccionHorasCienFichaTecnica = '$this->produccionHorasCienFichaTecnica',
                                        produccionHorasOchentaFichaTecnica = '$this->produccionHorasOchentaFichaTecnica',
                                        kilosTurnoDoceHorasFichaTecnica = '$this->kilosTurnoDoceHorasFichaTecnica',
                                        rollosTurnoDoceHorasFichaTecnica = '$this->rollosTurnoDoceHorasFichaTecnica',
                                        kilosTurnoOchoHorasFichaTecnica = '$this->kilosTurnoOchoHorasFichaTecnica',
                                        rollosTurnoOchoHorasFichaTecnica = '$this->rollosTurnoOchoHorasFichaTecnica',    
                                        toleranciaTintoreriaPermitidaAnchoFichaTecnica = '$this->toleranciaTintoreriaPermitidaAnchoFichaTecnica',
                                        toleranciaTintoreriaPermitidaRendimientoFichaTecnica = '$this->toleranciaTintoreriaPermitidaRendimientoFichaTecnica',
                                        TemporadaInspiracion_idTemporadaInspiracion = '$this->TemporadaInspiracion_idTemporadaInspiracion',
                                        totalAlimentadoresFichaTecnica = '$this->totalAlimentadoresFichaTecnica',
                                        consumoTotalMuestraFichaTecnica = '$this->consumoTotalMuestraFichaTecnica',
                                        sumaConsumoFichaTecnica = '$this->sumaConsumoFichaTecnica',
                                        productoTerminadoFichaTecnica = '$this->productoTerminadoFichaTecnica',
                                        materiaPrimaFichaTecnica = '$this->materiaPrimaFichaTecnica'
				        where idFichaTecnica = $this->idFichaTecnica"; 
		 
		/*Ejecutamos la query*/ 
		//echo '<br>'.$sql;
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
                
                //GRABAMOS las notas de las fichas aprobadas	
                $this->EliminarFichaTecnicaNotas("FichaTecnica_idFichaTecnica = $this->idFichaTecnica");
                $total=count($this->idFichaTecnicaNotas);
               // echo 'total maquinas '.$total."<br>";
		for($i=0; $i < $total; $i++)
		{
			$this->AdicionarFichaTecnicaNotas($this->idFichaTecnica, $i);
                       
		}
                
                //GRABAMOS maquinas	
                $this->EliminarFichaTecnicaMaquinas("FichaTecnica_idFichaTecnica = $this->idFichaTecnica");
                $total=count($this->idFichaTecnicaMaquinas);
               // echo 'total maquinas '.$total."<br>";
		for($i=0; $i < $total; $i++)
		{
			$this->AdicionarFichaTecnicaMaquinas($this->idFichaTecnica, $i);
                       
		}
              
                //	GRABAMOS tintoreria	
                $this->EliminarFichaTecnicaTintoreria("FichaTecnica_idFichaTecnica = $this->idFichaTecnica");
		$total=count($this->idFichaTecnicaTintoreria);
		for($i=0; $i < $total; $i++)
		{
			$this->AdicionarFichaTecnicaTintoreria($this->idFichaTecnica, $i);
		} 
                
                //GRABAMOS Hilaza		
		$this->EliminarFichaTecnicaHilaza("FichaTecnica_idFichaTecnica = $this->idFichaTecnica");
                $total=count($this->idFichaTecnicaHilaza);
               // print_r($this->idFichaTecnicaHilaza);
		for($i=0; $i < $total; $i++)
		{
			$this->AdicionarFichaTecnicaHilaza($this->idFichaTecnica, $i);
//                        echo "posuicion ". $i;
//                        echo "posuicion ". $total;
		} 
                 
                
                //	GRABAMOS variante: Color tela
                $this->EliminarFichaTecnicaColorTela("FichaTecnica_idFichaTecnica = $this->idFichaTecnica");                		
		$total=count($this->idFichaTecnicaColorTela);

		for($i=0; $i < $total; $i++)
		{
			$this->AdicionarFichaTecnicaColorTela($this->idFichaTecnica, $i);
		}
                
		//	GRABAMOS variante: Pinta
                $this->EliminarFichaTecnicaPinta("FichaTecnica_idFichaTecnica = $this->idFichaTecnica");                		
		$total=count($this->idFichaTecnicaPinta);
		for($i=0; $i < $total; $i++)
		{
			$this->AdicionarFichaTecnicaPinta($this->idFichaTecnica, $i);
		}
                
   
		/*
		//	GRABAMOS LOS Datos Tecnicos	
		$this->EliminarFichaTecnicaDatosTecnicos("FichaTecnica_idFichaTecnica = $this->idFichaTecnica");			
		$total=count($this->idFichaTecnicaDatosTecnicos);
		for($i=0; $i < $total; $i++)
		{
			$this->AdicionarFichaTecnicaDatosTecnicos($this->idFichaTecnica, $i);
		}*/
		
		// ELIMINAMOS LOS COLORES PARA LUEGO INSERTARLOS DE NUEVO CON LA INFORMACION DEL FORMULARIO
		$this->EliminarFichaTecnicaColor("FichaTecnica_idFichaTecnica = $this->idFichaTecnica");
		
		/*
			GRABAMOS LOS COLORES
		*/
		$total=count($this->idFichaTecnicaColor);

		for($i=0; $i < $total; $i++)
		{
			$this->AdicionarFichaTecnicaColor($this->idFichaTecnica, $i);
		}


		// ELIMINAMOS LAS TALLAS PARA LUEGO INSERTARLAS DE NUEVO CON LA INFORMACION DEL FORMULARIO
		$this->EliminarFichaTecnicaTalla("FichaTecnica_idFichaTecnica = $this->idFichaTecnica");

		/*
			GRABAMOS LAS TALLAS
		*/
		$total=count($this->idFichaTecnicaTalla);

		for($i=0; $i < $total; $i++)
		{
			$this->AdicionarFichaTecnicaTalla($this->idFichaTecnica, $i);
		}

		// ELIMINAMOS LAS TALLAS COMPLEMENTOS PARA LUEGO INSERTARLAS DE NUEVO CON LA INFORMACION DEL FORMULARIO
		$this->EliminarFichaTecnicaTallaComplemento("FichaTecnica_idFichaTecnica = $this->idFichaTecnica");
		
                $this->AdicionarFichaTecnicaTallaComplemento();

		// ELIMINAMOS LAS IMAGENES PARA LUEGO INSERTARLAS DE NUEVO CON LA INFORMACION DEL FORMULARIO
		$this->EliminarFichaTecnicaImagen("FichaTecnica_idFichaTecnica = $this->idFichaTecnica");
		/*
			GRABAMOS LAS IMAGENES
		*/
		$total=count($this->idFichaTecnicaImagen);

		for($i=0; $i < $total; $i++)
		{
			//echo('ingresa a modificar ficha imagen');
			$this->AdicionarFichaTecnicaImagen($this->idFichaTecnica, $i);
		}

		
		// ELIMINAMOS LAS PIEZAS PARA LUEGO INSERTARLAS DE NUEVO CON LA INFORMACION DEL FORMULARIO
		$this->EliminarFichaTecnicaPieza("FichaTecnica_idFichaTecnica = $this->idFichaTecnica");
		/*
			GRABAMOS LAS PIEZAS
		*/
		$total=count($this->idFichaTecnicaPieza);

		for($i=0; $i < $total; $i++)
		{
			$this->AdicionarFichaTecnicaPieza($this->idFichaTecnica, $i);
		}

		// ELIMINAMOS LOS DETALLES DE CONSTRUCCION PARA LUEGO INSERTARLAS DE NUEVO CON LA INFORMACION DEL FORMULARIO
		$this->EliminarFichaTecnicaConstruccion("FichaTecnica_idFichaTecnica = $this->idFichaTecnica");
		/*
			GRABAMOS LOS DETALLES DE CONSTRUCCION
		*/
		$total=count($this->idFichaTecnicaConstruccion);

		for($i=0; $i < $total; $i++)
		{
			$this->AdicionarFichaTecnicaConstruccion($this->idFichaTecnica, $i);
		}
		
		
		// ELIMINAMOS LOS COMPONENTES PARA LUEGO INSERTARLAS DE NUEVO CON LA INFORMACION DEL FORMULARIO
		$this->EliminarFichaTecnicaComponente("FichaTecnica_idFichaTecnica = $this->idFichaTecnica");
		/*
			GRABAMOS LOS COMPONENTES
		*/
		$total=count($this->idFichaTecnicaComponente);

		for($i=0; $i < $total; $i++)
		{
			$this->AdicionarFichaTecnicaComponente($this->idFichaTecnica, $i);
		}
		
		
		// ELIMINAMOS LOS MATERIALES DE EMPAQUE PARA LUEGO INSERTARLAS DE NUEVO CON LA INFORMACION DEL FORMULARIO
		//$this->EliminarFichaTecnicaEmpaque("FichaTecnica_idFichaTecnica = $this->idFichaTecnica");
		/*
			GRABAMOS LOS MATERIALES DE EMPAQUE 
		*/
		/*$total=count($this->idFichaTecnicaEmpaque);

		for($i=0; $i < $total; $i++)
		{
			$this->AdicionarFichaTecnicaEmpaque($this->idFichaTecnica, $i);
		}
		
		// ELIMINAMOS LOS MATERIALES PARA LUEGO INSERTARLAS DE NUEVO CON LA INFORMACION DEL FORMULARIO
		 */
		$this->EliminarFichaTecnicaMaterial("FichaTecnica_idFichaTecnica = $this->idFichaTecnica");
		/*
			GRABAMOS LOS MATERIALES
		*/
		$total=count($this->idFichaTecnicaMaterial);

		for($i=0; $i < $total; $i++)
		{
			$this->AdicionarFichaTecnicaMaterial($this->idFichaTecnica, $i);
		}

                $this->EliminarFichaTecnicaMaterialAdicional("FichaTecnica_idFichaTecnica = $this->idFichaTecnica");
		//GRABAMOS LOS MATERIALES ADICIONALES
		$total=count($this->idFichaTecnicaMaterialAdicional);
                for($i=0; $i < $total; $i++)
		{
                        $this->AdicionarFichaTecnicaMaterialAdicional($this->idFichaTecnica, $i);
		}
                //$this->AdicionarFichaTecnicaMaterialAdicional();
        
		// ELIMINAMOS LAS COMBINACIONES PARA LUEGO INSERTARLAS DE NUEVO CON LA INFORMACION DEL FORMULARIO
		$this->EliminarFichaTecnicaCombinacion("FichaTecnica_idFichaTecnica = $this->idFichaTecnica");
		/*
			GRABAMOS LAS COMBINACIONES
		*/
		$total=count($this->idFichaTecnicaCombinacion);

		for($i=0; $i < $total; $i++)
		{
			$this->AdicionarFichaTecnicaCombinacion($this->idFichaTecnica, $i);
		}
		
                //Validamos el parametro de produccion, si esta seleccionado grabamos
                if($this->PestanaMedidasParametrosProduccion == 1)
                {
                    
                    // ELIMINAMOS LAS ESPECIFICACIONES PARA LUEGO INSERTARLAS DE NUEVO CON LA INFORMACION DEL FORMULARIO
                    $this->EliminarFichaTecnicaEspecificacion("FichaTecnica_idFichaTecnica = $this->idFichaTecnica");		
                    // GRABAMOS LAS ESPECIFICACIONES                    
                    $total=count($this->idFichaTecnicaEspecificacion);
                    for($i=0; $i < $total; $i++)
                    {
                            $this->AdicionarFichaTecnicaEspecificacion($this->idFichaTecnica, $i);
                    }
		                    
                    // ELIMINAMOS LAS MEDIDAS PARA LUEGO INSERTARLAS DE NUEVO CON LA INFORMACION DEL FORMULARIO
                    $this->EliminarFichaTecnicaMedida("FichaTecnica_idFichaTecnica = $this->idFichaTecnica");	
                    // ELIMINAMOS LAS MEDIDAS POR TALLA PARA LUEGO INSERTARLAS DE NUEVO CON LA INFORMACION DEL FORMULARIO
                    $this->EliminarFichaTecnicaMedidaTalla("FichaTecnica_idFichaTecnica = $this->idFichaTecnica");	
                    
                    //GRABAMOS LAS MEDIDAS
                    $total = count($this->idFichaTecnicaMedida);		
                    for($i=0; $i < $total; $i++)
                    {
                            $this->AdicionarFichaTecnicaMedida($this->idFichaTecnica, $i);
                    }  
                }
                
	

		
		// ELIMINAMOS LOS ARCHIVOS ADJUNTOS PARA LUEGO INSERTARLAS DE NUEVO CON LA INFORMACION DEL FORMULARIO
		$this->EliminarFichaTecnicaAdjunto("FichaTecnica_idFichaTecnica = $this->idFichaTecnica");
		/*
			GRABAMOS LOS ARCHIVOS ADJUNTOS 
		*/
		$total=count($this->idFichaTecnicaAdjunto);

		for($i=0; $i < $total; $i++)
		{
			$this->AdicionarFichaTecnicaAdjunto($this->idFichaTecnica, $i);
		}

		// ELIMINAMOS LOS CENTROS DE PRODUCCION PARA LUEGO INSERTARLOS DE NUEVO CON LA INFORMACION DEL FORMULARIO
		$this->EliminarFichaTecnicaCentroProduccion("FichaTecnica_idFichaTecnica = $this->idFichaTecnica");
		/*
			GRABAMOS LOS CENTROS DE PRODUCCION
		*/
		$total=count($this->idFichaTecnicaCentroProduccion);

		for($i=0; $i < $total; $i++)
		{
			$this->AdicionarFichaTecnicaCentroProduccion($this->idFichaTecnica, $i);
		}
		
		//Comienza a modificar el producto
		
//		require_once 'codigobarras.class.php';		
//		$codigobarras = new CodigoBarras();
//		require_once 'esquemaproducto.class.php';		
//		$esquemaproducto = new EsquemaProducto();		
//		require_once('../clases/producto.class.php');
//		$producto = new Producto();
//
//		//print_r($prod);
//		$datoficha = $this->ConsultarVistaFichaTecnicaGeneral("idFichaTecnica = $this->idFichaTecnica");
//
//		$datoesquema = $esquemaproducto->ConsultarVistaEsquemaProducto("idEsquemaProducto = ".$datoficha[0]["EsquemaProducto_idEsquemaProducto"]);		
//		
//		// el proceso debe crear un array de colores y un array de tallas para el producto, dependiendo de las condiciones del esquema
//		// luego para cada uno de esos colores y tallas, genera un producto diferente
//		$colores = array();
//		$codigoColor = array();
//		$tallas = array();
//		$codigoTalla = array();
//		$tallasComplemento = array();
//		$codigoTallaComplemento = array();
//		
//		// si el esquema genera colores independientes
//		if($datoesquema[0]["generaColorEsquemaProducto"] == 1)
//		{			
//			// consultamos los colores de la ficha tecnica
//			$datocolor = $this->ConsultarVistaFichaTecnicaColores("idFichaTecnica = $this->idFichaTecnica");
//			$totalcolores = count($datocolor);
//			
//			// si no tiene colores, solo creamos un color de id cero
//			if($totalcolores == 0)
//			{
//				$colores[] = 0;
//				$codigoColor[] = '';
//			}	
//			else  // si tiene colores 
//			{
//				// recorremos un ciclo para cada uno de los colores de la ficha tecnica
//				for($col = 0 ; $col < $totalcolores; $col++)
//				{
//					$colores[] = $datocolor[$col]['Color_idColor'];
//					$codigoColor[] = $datocolor[$col]['codigoAlternoColor'];
//				}
//			}
//		}
//		else	// si no genera colores independientes
//		{
//			$colores[] = $datoesquema[0]["Color_idColor"];
//			$codigoColor[] = $datoesquema[0]['codigoAlternoColor'];
//		}
//			
//		
//		// hacemos le mismo proceso para las tallas...
//		// si el esquema genera tallas independientes
//		if($datoesquema[0]["generaTallaEsquemaProducto"] == 1)
//		{	
//			
//			$datotalla = $this->ConsultarVistaFichaTecnicaTallas("idFichaTecnica = $this->idFichaTecnica");
//			$totaltallas = count($datotalla);
//
//			if($totaltallas == 0)
//			{
//				$tallas[] = 0;
//				$codigoTalla[] = '';
//			}	
//			else  // si tiene tallas 
//			{
//				// recorremos un ciclo para cada una de las tallas de la ficha tecnica
//				for($tal = 0 ; $tal < $totaltallas; $tal++)
//				{
//					$tallas[] = $datotalla[$tal]['Talla_idTalla'];
//					$codigoTalla[] = $datotalla[$tal]['codigoAlternoTalla'];
//				}
//			}
//		}
//		else	// si no genera tallas independientes
//		{
//			$tallas[] = $datoesquema[0]["Talla_idTalla"];
//			$codigoTalla[] = $datoesquema[0]["codigoAlternoTalla"];
//		}
//		
//		
//		if($datoesquema[0]["generaTallaComplementoEsquemaProducto"] == 1)
//		{
//			
//			$datoTallaComplemento = $this->ConsultarVistaFichaTecnicaTallaComplemento("idFichaTecnica = $this->idFichaTecnica");
//			$totalTallasComplemento = count($datoTallaComplemento);
//
//			if($totalTallasComplemento == 0)
//			{
//				$tallasComplemento[] = 0;
//				$codigoTallaComplemento[] = '';
//			}	
//			else  
//			{
//				// recorremos un ciclo para cada una de las tallas de la ficha tecnica
//				for($tal = 0 ; $tal < $totalTallasComplemento; $tal++)
//				{
//					$tallasComplemento[] = $datoTallaComplemento[$tal]['TallaComplemento_idTallaComplemento'];
//					$codigoTallaComplemento[] = $datoTallaComplemento[$tal]['codigoAlternoTallaComplemento'];
//				}
//			}
//		}
//		else
//		{
//			$tallasComplemento[] = $datoesquema[0]['TallaComplemento_idTallaComplemento'];
//			$codigoTallaComplemento[] = $datoesquema[0]['codigoAlternoTallaComplemento'];
//		}
//			
//		// recorremos todos los colores ypor cada color todas las tallas
//		// verificando si el producto ya existe para actualizarlo o si no para crearlo
//		$totalcol = count($colores);
//		for($col = 0 ; $col < $totalcol; $col++)
//		{
//			$totaltal = count($tallas);
//			for($tal = 0 ; $tal < $totaltal; $tal++)
//			{
//				$totaltalcomple = count($tallasComplemento);
//				for ($talcom = 0 ; $talcom < $totaltalcomple; $talcom++)
//				{
//				// buscamos si ya existe un producto asociado a la ficha tecnica con el mismo color y talla
//				$prod = $producto->ConsultarVistaProducto("FichaTecnica_idFichaTecnica = ".$this->idFichaTecnica. 
//													" and Color_idColor = ".$colores[$col].
//													" and Talla_idTalla = ".$tallas[$tal].
//													" and TallaComplemento_idTallaComplemento = ".$tallasComplemento[$talcom],
//													"");
//
//				// llenamos los campos con los datos del formulario de ficha
//
//				$producto->idProducto = 0;
//				$producto->codigoAlternoProducto = trim($datoficha[0]["referenciaBaseFichaTecnica"]); 
//				$producto->referenciaProducto = trim($datoficha[0]["referenciaBaseFichaTecnica"]) . 
//												trim($codigoColor[$col]) . 
//												trim($codigoTalla[$tal]) .
//												trim($codigoTallaComplemento[$talcom]);
//
//				$producto->nombreLargoProducto = $datoficha[0]["nombreLargoFichaTecnica"];
//				$producto->nombreCortoProducto = $datoficha[0]["nombreCortoFichaTecnica"];
//				$producto->precioProducto = $datoficha[0]["precioFichaTecnica"];
//				$producto->ivaIncluidoProducto = $datoficha[0]["ivaIncluidoFichaTecnica"];
//				$producto->acumulaPuntosProducto = $datoficha[0]["acumulaPuntosFichaTecnica"];
//				$producto->redimePuntosProducto = $datoficha[0]["redimePuntosFichaTecnica"];
//				$producto->fechaCreacionProducto = date("Y-m-d");
//				$producto->estadoProducto = 'ACTIVO';
//				$producto->clasificacionProducto = '*01*';
//				$producto->Color_idColor = $colores[$col];
//				$producto->Talla_idTalla = $tallas[$tal];
//				$producto->TallaComplemento_idTallaComplemento = $tallasComplemento[$talcom];
//				$producto->FichaTecnica_idFichaTecnica = $this->idFichaTecnica;
//				$producto->cantidadContenidaProducto = 0;
//				$producto->Tercero_idCliente =  $datoficha[0]["Tercero_idCliente"];
//				$producto->Marca_idMarca = $datoficha[0]["Marca_idMarca"];
//				$producto->Pais_idPaisOrigen = $datoficha[0]["Pais_idPais"];
//				$producto->EstadoConservacion_idEstadoConservacion =  $datoficha[0]["EstadoConservacion_idEstadoConservacion"];
//				$producto->TipoProducto_idTipoProducto =  $datoficha[0]["TipoProducto_idTipoProducto"];
//				$producto->TipoNegocio_idTipoNegocio =  $datoficha[0]["TipoNegocio_idTipoNegocio"];
//				$producto->Temporada_idTemporada = $datoficha[0]["Temporada_idTemporada"];
//				$producto->Composicion_idComposicion = $datoficha[0]["Composicion_idComposicion"];
//				$producto->Categoria_idCategoria =  $datoficha[0]["Categoria_idCategoria"];
//				$producto->UnidadMedida_idCompra =  $datoficha[0]["UnidadMedida_idCompra"];
//				$producto->UnidadMedida_idVenta =  $datoficha[0]["UnidadMedida_idVenta"];
//				$producto->Clima_idClima = $datoficha[0]["Clima_idClima"];
//				$producto->Difusion_idDifusion = $datoficha[0]["Difusion_idDifusion"];
//				$producto->Estrategia_idEstrategia = $datoficha[0]["Estrategia_idEstrategia"];
//				$producto->Evento_idEvento = $datoficha[0]["Evento_idEvento"];
//				$producto->PosicionArancelaria_idPosicionArancelaria = $datoficha[0]["PosicionArancelaria_idPosicionArancelaria"];
//				$producto->Seccion_idSeccion = $datoficha[0]["Seccion_idSeccion"];
//				$producto->ClienteObjetivo_idClienteObjetivo =  $datoficha[0]["ClienteObjetivo_idClienteObjetivo"];
//
//				// generamos el codigo de barras del producto
//				$producto->codigoBarrasProducto = $codigobarras->GenerarCodigoBarras();
//				
//				
//				// si el producto ya existe en el modulo comercial, rescatamos los datos generales que ya tiene grabados por si los han modificado
//				if(isset($prod[0]["idProducto"]))
//				{
//					
//					$producto->idProducto = $prod[0]["idProducto"];
//					$producto->referenciaProducto = $prod[0]["referenciaProducto"];
//					//$producto->nombreLargoProducto = $prod[0]["nombreLargoProducto"];
//					//$producto->nombreCortoProducto = $prod[0]["nombreCortoProducto"];
//					$producto->fechaCreacionProducto = $prod[0]["fechaCreacionProducto"];
//					$producto->estadoProducto = $prod[0]["estadoProducto"];
//					$producto->clasificacionProducto = $prod[0]["clasificacionProducto"];
//					$producto->codigoBarrasProducto = ($prod[0]["codigoBarrasProducto"] == '' ? $producto->codigoBarrasProducto : $prod[0]["codigoBarrasProducto"]);
//					
//					/*// los campos que se modifican en el detalle de productos, se deben llenar con el datos correspondiente a su talla y Color
//					// buscamos la talla y el color en los arrays de la pestaï¿½a de productos para saber el offset de la linea
//					$colores = $_POST['Producto_idColor'];
//					$tallas = $_POST['Producto_idTalla'];
//					$barras = $_POST['codigoBarrasProducto'];
//					$refclien = $_POST['referenciaClienteProducto'];
//					$refprov = $_POST['referenciaProveedorProducto'];
//					$codalter = $_POST["codigoAlternoProducto"];
//
//					$totalreg = count($colores);
//					for($reg = 0 ; $reg < $totalreg; $reg++)
//					{							
//						if($colores[$reg] == $fichatecnica->Color_idColor[$col] and $tallas[$reg] == $fichatecnica->Talla_idTalla[$tal])
//						{
//							$producto->codigoBarrasProducto = $barras[$reg];
//							$producto->referenciaClienteProducto = $refclien[$reg];
//							$producto->referenciaProveedorProducto = $refprov[$reg];
//							$producto->codigoAlternoProducto = $codalter[$reg];
//						}
//					}*/
//
//					// Actualizamos la informaciï¿½nn del producto
//					$producto->ModificarProductoFichaTecnica() ;
//					//echo 'MODIFICO';
//				}				
//			}
//		}
//	}
		return $query;
    } 
	
	
	
	// modifica los datos generales de la ficha tecnica y cada una de sus tablas de detalle
	function ModificarFichaTecnicaBasica()
	{
		/*Creamos una query sencilla*/ 
		$sql="update FichaTecnica 
				set referenciaBaseFichaTecnica = '$this->referenciaBaseFichaTecnica',
					nombreLargoFichaTecnica = '$this->nombreLargoFichaTecnica',
					nombreCortoFichaTecnica = '$this->nombreCortoFichaTecnica',
					codigoAlternoFichaTecnica = '$this->codigoAlternoFichaTecnica',
					numeroMoldeFichaTecnica = '$this->numeroMoldeFichaTecnica',
					areaMoldeFichaTecnica = '$this->areaMoldeFichaTecnica',
					disenadorFichaTecnica = '$this->disenadorFichaTecnica',
					SegLogin_idUsuarioCrea = '$this->SegLogin_idUsuarioCrea',
					fechaCreacionFichaTecnica = '$this->fechaCreacionFichaTecnica',
					SegLogin_idUsuarioAprueba = '$this->SegLogin_idUsuarioAprueba',
					fechaAprobacionFichaTecnica = '$this->fechaAprobacionFichaTecnica',
					SegLogin_idUsuarioModifica = '$this->SegLogin_idUsuarioModifica',
					fechaModificacionFichaTecnica = '$this->fechaModificacionFichaTecnica',
					estadoFichaTecnica = '$this->estadoFichaTecnica',
					conceptoTelaFichaTecnica = '$this->conceptoTelaFichaTecnica',
					Tercero_idCliente = '$this->Tercero_idCliente',
					Marca_idMarca = '$this->Marca_idMarca',
					referenciaClienteFichaTecnica = '$this->referenciaClienteFichaTecnica',
					TipoNegocio_idTipoNegocio = '$this->TipoNegocio_idTipoNegocio',
					TipoProducto_idTipoProducto = '$this->TipoProducto_idTipoProducto',
					Temporada_idTemporada = '$this->Temporada_idTemporada',
					EstadoConservacion_idEstadoConservacion = '$this->EstadoConservacion_idEstadoConservacion',
					Categoria_idCategoria = '$this->Categoria_idCategoria',
					CaracteristicasHilaza_idCaracteristicasHilaza = '$this->CaracteristicasHilaza_idCaracteristicasHilaza',
					UnidadMedida_idCompra = '$this->UnidadMedida_idCompra',
					UnidadMedida_idVenta = '$this->UnidadMedida_idVenta',
					Pais_idPais = '$this->Pais_idPais',
					DescripcionBase_idDescripcionBase = '$this->DescripcionBase_idDescripcionBase',
					ConstruccionHilo_idContruccionHilo = '$this->ConstruccionHilo_idContruccionHilo',
					ClienteObjetivo_idClienteObjetivo = '$this->ClienteObjetivo_idClienteObjetivo',
                    EsquemaProducto_idEsquemaProducto = '$this->EsquemaProducto_idEsquemaProducto',
					Clima_idClima = '$this->Clima_idClima', 
					Difusion_idDifusion = '$this->Difusion_idDifusion', 
					Estrategia_idEstrategia = '$this->Estrategia_idEstrategia', 
					Seccion_idSeccion = '$this->Seccion_idSeccion', 
					Evento_idEvento = '$this->Evento_idEvento',
					PosicionArancelaria_idPosicionArancelaria = '$this->PosicionArancelaria_idPosicionArancelaria',
					observacionesFichaTecnica = '$this->observacionesFichaTecnica',
					observacionCotizacionFichaTecnica = '$this->observacionCotizacionFichaTecnica',
					observacionConstruccionFichaTecnica = '$this->observacionConstruccionFichaTecnica',
					Composicion_idComposicion = '$this->Composicion_idComposicion',
					imagenMedida1FichaTecnica = '$this->imagenMedida1FichaTecnica',
					imagenMedida2FichaTecnica = '$this->imagenMedida2FichaTecnica'
				where idFichaTecnica = $this->idFichaTecnica"; 
		 
		/*Ejecutamos la query*/ 
		//echo $sql;
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
		
		// ELIMINAMOS LOS COLORES PARA LUEGO INSERTARLOS DE NUEVO CON LA INFORMACION DEL FORMULARIO
		$this->EliminarFichaTecnicaColor("FichaTecnica_idFichaTecnica = $this->idFichaTecnica");
		$total=count($this->idFichaTecnicaColor);

		for($i=0; $i < $total; $i++)
		{
			$this->AdicionarFichaTecnicaColor($this->idFichaTecnica, $i);
		}


		// ELIMINAMOS LAS TALLAS PARA LUEGO INSERTARLAS DE NUEVO CON LA INFORMACION DEL FORMULARIO
		$this->EliminarFichaTecnicaTalla("FichaTecnica_idFichaTecnica = $this->idFichaTecnica");
		$total=count($this->idFichaTecnicaTalla);

		for($i=0; $i < $total; $i++)
		{
			$this->AdicionarFichaTecnicaTalla($this->idFichaTecnica, $i);
		}
		
		// ELIMINAMOS LAS TALLAS COMPLEMENTOS PARA LUEGO INSERTARLAS DE NUEVO CON LA INFORMACION DEL FORMULARIO
		$this->EliminarFichaTecnicaTallaComplemento("FichaTecnica_idFichaTecnica = $this->idFichaTecnica");
		$this->AdicionarFichaTecnicaTallaComplemento();
		

		// ELIMINAMOS LAS IMAGENES PARA LUEGO INSERTARLAS DE NUEVO CON LA INFORMACION DEL FORMULARIO
		$this->EliminarFichaTecnicaImagen("FichaTecnica_idFichaTecnica = $this->idFichaTecnica");
		/*
			GRABAMOS LAS IMAGENES
		*/
		$total=count($this->idFichaTecnicaImagen);

		for($i=0; $i < $total; $i++)
		{
			$this->AdicionarFichaTecnicaImagen($this->idFichaTecnica, $i);
		}

		
		// ELIMINAMOS LOS DETALLES DE CONSTRUCCION PARA LUEGO INSERTARLAS DE NUEVO CON LA INFORMACION DEL FORMULARIO
		$this->EliminarFichaTecnicaConstruccion("FichaTecnica_idFichaTecnica = $this->idFichaTecnica");
		/*
			GRABAMOS LOS DETALLES DE CONSTRUCCION
		*/
		$total=count($this->idFichaTecnicaConstruccion);

		for($i=0; $i < $total; $i++)
		{
			$this->AdicionarFichaTecnicaConstruccion($this->idFichaTecnica, $i);
		}
		
		
		// ELIMINAMOS LAS ESPECIFICACIONES PARA LUEGO INSERTARLAS DE NUEVO CON LA INFORMACION DEL FORMULARIO
		$this->EliminarFichaTecnicaEspecificacion("FichaTecnica_idFichaTecnica = $this->idFichaTecnica");
		
		/*
			GRABAMOS LAS ESPECIFICACIONES
		*/
		$total=count($this->idFichaTecnicaEspecificacion);

		for($i=0; $i < $total; $i++)
		{
			$this->AdicionarFichaTecnicaEspecificacion($this->idFichaTecnica, $i);
		}
			
		// ELIMINAMOS LOS COMPONENTES PARA LUEGO INSERTARLAS DE NUEVO CON LA INFORMACION DEL FORMULARIO
		$this->EliminarFichaTecnicaComponente("FichaTecnica_idFichaTecnica = $this->idFichaTecnica");
		/*
			GRABAMOS LOS COMPONENTES
		*/
		$total=count($this->idFichaTecnicaComponente);

		for($i=0; $i < $total; $i++)
		{
			$this->AdicionarFichaTecnicaComponente($this->idFichaTecnica, $i);
		}
		
		// ELIMINAMOS LOS MATERIALES DE EMPAQUE PARA LUEGO INSERTARLAS DE NUEVO CON LA INFORMACION DEL FORMULARIO
		$this->EliminarFichaTecnicaEmpaque("FichaTecnica_idFichaTecnica = $this->idFichaTecnica");
		/*
			GRABAMOS LOS MATERIALES DE EMPAQUE
		*/
		/*$total=count($this->idFichaTecnicaEmpaque);

		for($i=0; $i < $total; $i++)
		{
			$this->AdicionarFichaTecnicaEmpaque($this->idFichaTecnica, $i);
		}*/
		
		return $query;
    } 
	

        function ModificarFichaTecnicaMedidas()
        {
            
            $sql="update FichaTecnica 
				set imagenMedida1FichaTecnica = '$this->imagenMedida1FichaTecnica',
                                    imagenMedida2FichaTecnica = '$this->imagenMedida2FichaTecnica'
				where idFichaTecnica = $this->idFichaTecnica"; 
		 
		/*Ejecutamos la query*/ 
		//echo $sql;
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
                
                
                // ELIMINAMOS LAS ESPECIFICACIONES PARA LUEGO INSERTARLAS DE NUEVO CON LA INFORMACION DEL FORMULARIO
                $this->EliminarFichaTecnicaEspecificacion("FichaTecnica_idFichaTecnica = $this->idFichaTecnica");		
                // GRABAMOS LAS ESPECIFICACIONES                    
                $total=count($this->idFichaTecnicaEspecificacion);
                for($i=0; $i < $total; $i++)
                {
                        $this->AdicionarFichaTecnicaEspecificacion($this->idFichaTecnica, $i);
                }
            
            	// ELIMINAMOS LAS MEDIDAS PARA LUEGO INSERTARLAS DE NUEVO CON LA INFORMACION DEL FORMULARIO
		$this->EliminarFichaTecnicaMedida("FichaTecnica_idFichaTecnica = $this->idFichaTecnica");	
		// ELIMINAMOS LAS MEDIDAS POR TALLA PARA LUEGO INSERTARLAS DE NUEVO CON LA INFORMACION DEL FORMULARIO
		$this->EliminarFichaTecnicaMedidaTalla("FichaTecnica_idFichaTecnica = $this->idFichaTecnica");		
		/*
			GRABAMOS LAS MEDIDAS
		*/
		
		$total = count($this->idFichaTecnicaMedida);
		
		for($i=0; $i < $total; $i++)
		{
			$this->AdicionarFichaTecnicaMedida($this->idFichaTecnica, $i);
		}
                return $query;
        }
    
    
    
	// modifica los datos generales de la ficha tecnica y cada una de sus tablas de detalle
	function EliminarFichaTecnica()
	{
		/*Creamos una query sencilla*/ 
		$sql="delete from FichaTecnica 
				where idFichaTecnica = $this->idFichaTecnica"; 
		 
		/*Ejecutamos la query*/ 
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 

                
                // ELIMINAMOS LOS COLORES TELA
		$this->EliminarFichaTecnicaColorTela("FichaTecnica_idFichaTecnica = $this->idFichaTecnica");
                
                // ELIMINAMOS LAS TINTORERIAS DE TELA
		$this->EliminarFichaTecnicaTintoreria("FichaTecnica_idFichaTecnica = $this->idFichaTecnica");
                
                                
                // ELIMINAMOS LAS NOTAS
		//$this->EliminarFichaTecnicaNotas("FichaTecnica_idFichaTecnica = $this->idFichaTecnica");
                
                
		// ELIMINAMOS LOS COLORES 
		$this->EliminarFichaTecnicaColor("FichaTecnica_idFichaTecnica = $this->idFichaTecnica");
		
		// ELIMINAMOS LAS TALLAS 
		$this->EliminarFichaTecnicaTalla("FichaTecnica_idFichaTecnica = $this->idFichaTecnica");
		
		// ELIMINAMOS LAS TALLAS COMPLEMENTOS
		$this->EliminarFichaTecnicaTallaComplemento("FichaTecnica_idFichaTecnica = $this->idFichaTecnica");
		
		// ELIMINAMOS LAS IMAGENES 
		$this->EliminarFichaTecnicaImagen("FichaTecnica_idFichaTecnica = $this->idFichaTecnica");

		// ELIMINAMOS LAS PIEZAS 
		$this->EliminarFichaTecnicaPieza("FichaTecnica_idFichaTecnica = $this->idFichaTecnica");
		
		// ELIMINAMOS LOS DETALLES DE CONSTRUCCION 
		$this->EliminarFichaTecnicaConstruccion("FichaTecnica_idFichaTecnica = $this->idFichaTecnica");

		// ELIMINAMOS LAS ESPECIFICACIONES PARA LUEGO INSERTARLAS DE NUEVO CON LA INFORMACION DEL FORMULARIO
		$this->EliminarFichaTecnicaEspecificacion("FichaTecnica_idFichaTecnica = $this->idFichaTecnica");
		
		// ELIMINAMOS LAS COMBINACIONES PARA LUEGO INSERTARLAS DE NUEVO CON LA INFORMACION DEL FORMULARIO
		$this->EliminarFichaTecnicaCombinacion("FichaTecnica_idFichaTecnica = $this->idFichaTecnica");
		
		// ELIMINAMOS LOS MATERIALES 
		$this->EliminarFichaTecnicaMaterial("FichaTecnica_idFichaTecnica = $this->idFichaTecnica");
        
		// ELIMINAMOS LOS MATERIALES 
		$this->EliminarFichaTecnicaMaterialAdicional("FichaTecnica_idFichaTecnica = $this->idFichaTecnica");
		
		// ELIMINAMOS LAS MEDIDAS 
		$this->EliminarFichaTecnicaMedida("FichaTecnica_idFichaTecnica = $this->idFichaTecnica");
		
		// ELIMINAMOS LAS MEDIDAS POR TALLA PARA LUEGO INSERTARLAS DE NUEVO CON LA INFORMACION DEL FORMULARIO
		$this->EliminarFichaTecnicaMedidaTalla("FichaTecnica_idFichaTecnica = $this->idFichaTecnica");

		// ELIMINAMOS LOS CENTROS DE PRODUCCION PARA LUEGO INSERTARLOS DE NUEVO CON LA INFORMACION DEL FORMULARIO
		$this->EliminarFichaTecnicaCentroProduccion("FichaTecnica_idFichaTecnica = $this->idFichaTecnica");

		// ELIMINAMOS LOS ARCHIVOS ADJUNTOS 
		$this->EliminarFichaTecnicaAdjunto("FichaTecnica_idFichaTecnica = $this->idFichaTecnica");
		
		// ELIMINAMOS LOS COMPONENTES
		$this->EliminarFichaTecnicaComponente("FichaTecnica_idFichaTecnica = $this->idFichaTecnica");
		
		// ELIMINAMOS LISTADO DE OPERACIONES 
//		$this->EliminarFichaTecnica("FichaTecnica_idFichaTecnica = $this->idFichaTecnica");
		
		
		// ELIMINAMOS LAS OPERACIONES
		/* PARA ELIMINAR TODO EN UN SOLO PROCESO
		 * DELETE t1, t2, t3, t4, t5, t6
FROM  Movimiento t1 
LEFT JOIN  MovimientoDetalle t2 
ON t1.idMovimiento = t2.Movimiento_idMovimiento
LEFT JOIN MovimientoImpuesto t3
ON t1.idMovimiento = t3.Movimiento_idMovimiento
LEFT JOIN MovimientoRetencion t4
ON t1.idMovimiento = t4.Movimiento_idMovimiento
LEFT JOIN MovimientoDocumentoRef t5
ON t1.idMovimiento = t5.Movimiento_idMovimiento
LEFT JOIN MovimientoMedioPago t6
ON t1.idMovimiento = t6.Movimiento_idMovimiento
WHERE t1.idMovimiento IN ( , , , , )
		 */

		return $query;
    } 
	
    
    // modifica los datos generales de la ficha tecnica y cada una de sus tablas de detalle
	function ModificarFichaTecnicaCostoEstandar()
	{        
		/*Creamos una query sencilla*/ 
		$sql="update FichaTecnica 
				set samCosteoFichaTecnica = '$this->samCosteoFichaTecnica',
					costoMaterialFichaTecnica = $this->costoMaterialFichaTecnica,
					costoProcesoFichaTecnica = $this->costoProcesoFichaTecnica,
					costoMOFichaTecnica = $this->costoMOFichaTecnica,
					costoPrimoFichaTecnica = $this->costoPrimoFichaTecnica,
					costoCIFFichaTecnica = $this->costoCIFFichaTecnica,
					subtotalFichaTecnica = $this->subtotalFichaTecnica,
					costoFijoFichaTecnica = $this->costoFijoFichaTecnica,
					costoUnitarioFichaTecnica = $this->costoUnitarioFichaTecnica,
					estadoCostoFichaTecnica = '$this->estadoCostoFichaTecnica',
					fechaAprobacionCostoFichaTecnica = '$this->fechaAprobacionCostoFichaTecnica',
					tasaCambioCostoFichaTecnica = '$this->tasaCambioCostoFichaTecnica',
					observacionCostosFichaTecnica = '$this->observacionCostosFichaTecnica',
                                        costoFichaTecnica = '$this->costoUnitarioFichaTecnica'
				where idFichaTecnica = $this->idFichaTecnica"; 
		 
		/*Ejecutamos la query*/ 
		//echo $sql;
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
                
		/*Creamos un query para asignar el costo estandar en productos*/ 
                $query2 =false;                
                if($this->estadoCostoFichaTecnica == 'APROBADO')
                {                
                    /*Creamos un query para asignar el costo estandar en productos*/ 
                    $sql2= "update Producto 
                                    set costoEstandarProducto = '$this->costoUnitarioFichaTecnica'
                            where FichaTecnica_idFichaTecnica = $this->idFichaTecnica".";"; 

                    /*Ejecutamos la query*/ 
//                    echo $sql2;
                    $bd = Db::getInstance();
                    $query2 = $bd->ejecutar($sql2); 
                }
		
                
				
		// actualizamos el costo de los materiales
		$total = isset($this->idFichaTecnicaMaterial[0]) ? count($this->idFichaTecnicaMaterial) : 0;
		for($i=0; $i < $total; $i++)
		{
			$actualizacion =   "UPDATE FichaTecnicaMaterial
								 SET	costoUnitarioAprobadoProductoMaterial = ". $this->costoUnitarioAprobadoProductoMaterial[$i]."
								 WHERE 	idFichaTecnicaMaterial = ".$this->idFichaTecnicaMaterial[$i] ."; ";
                        
                                 //echo '<br> actualizar costo '.$actualizacion;
                        $bd = Db::getInstance();
                        $query1 = $bd->ejecutar($actualizacion); 
		}
		
		// actualizamos el costo de los procesos especiales
		$total = isset($this->idFichaTecnicaProceso[0]) ? count($this->idFichaTecnicaProceso) : 0;
		for($i=0; $i < $total; $i++)
		{
			$actualizacion =   "UPDATE FichaTecnicaProceso
								 SET	costoUnitarioAprobadoFichaTecnicaProceso = ". $this->costoUnitarioAprobadoFichaTecnicaProceso[$i]."
								 WHERE 	idFichaTecnicaProceso = ".$this->idFichaTecnicaProceso[$i] ."; ";
                        $bd = Db::getInstance();
                        $query1 = $bd->ejecutar($actualizacion); 
		}
		
		// actualizamos el costo de las operaciones de Mano de Obra
		$total = isset($this->idFichaTecnicaOperacion[0]) ? count($this->idFichaTecnicaOperacion) : 0;
		for($i=0; $i < $total; $i++)
		{
			$actualizacion =   "UPDATE FichaTecnicaOperacion
								 SET	costoUnitarioAprobadoFichaTecnicaOperacion = ". $this->costoUnitarioAprobadoFichaTecnicaOperacion[$i]."
								 WHERE 	idFichaTecnicaOperacion = ".$this->idFichaTecnicaOperacion[$i] ."; ";                        
                        
                        $bd = Db::getInstance();
                        $query1 = $bd->ejecutar($actualizacion); 
		}
		
		// actualizamos el costo de los costos indirectos
		$total = isset($this->idFichaTecnicaCostoIndirecto[0]) ? count($this->idFichaTecnicaCostoIndirecto) : 0;
		for($i=0; $i < $total; $i++)
		{
			$actualizacion =   "UPDATE FichaTecnicaCostoIndirecto
								 SET	costoUnitarioAprobadoFichaTecnicaCostoIndirecto = ". $this->costoUnitarioAprobadoFichaTecnicaCostoIndirecto[$i]."
								 WHERE 	idFichaTecnicaCostoIndirecto = ".$this->idFichaTecnicaCostoIndirecto[$i] ."; ";
                        $bd = Db::getInstance();
                        $query1 = $bd->ejecutar($actualizacion); 
		}
		
		// actualizamos el costo de los costos adicionales
		$total = isset($this->idFichaTecnicaCostoAdicional[0]) ? count($this->idFichaTecnicaCostoAdicional) : 0;
		for($i=0; $i < $total; $i++)
		{
			$actualizacion =   "UPDATE FichaTecnicaCostoAdicional
								 SET	costoUnitarioAprobadoFichaTecnicaCostoAdicional = ". $this->costoUnitarioAprobadoFichaTecnicaCostoAdicional[$i]."
								 WHERE 	idFichaTecnicaCostoAdicional = ".$this->idFichaTecnicaCostoAdicional[$i] ."; ";
                        $bd = Db::getInstance();
                        $query1 = $bd->ejecutar($actualizacion); 
		}
		
		// actualizamos el costo de los precios estimados
		$total = isset($this->idFichaTecnicaPrecioFicha[0]) ? count($this->idFichaTecnicaPrecioFicha) : 0;
		for($i=0; $i < $total; $i++)
		{
			$actualizacion =   "UPDATE FichaTecnicaPrecioFicha
								 SET	precioUnitarioAprobadoFichaTecnicaPrecioFicha = ". $this->precioUnitarioAprobadoFichaTecnicaPrecioFicha[$i]."
								 WHERE 	idFichaTecnicaPrecioFicha = ".$this->idFichaTecnicaPrecioFicha[$i] ."; ";
                        $bd = Db::getInstance();
                        $query1 = $bd->ejecutar($actualizacion); 
		}
		
        $this->EliminarFichaTecnicaCostoEstandarImagen("FichaTecnica_idFichaTecnica = ".$this->idFichaTecnica);
		$this->AdicionarFichaTecnicaCostoEstandarImagen();
		
		return $query.$query1.$query2;
    } 
    
	
	function ConsultarIdFichaTecnica($Condicion = '',$orden = '' ) 
        { 
		if(!empty($Condicion))
		{
			$Condicion = ' where '. $Condicion;
		}
		
		if(!empty($orden))
		{
			$orden = ' order by '. $orden;
		}
		
		
		/*Creamos una query sencilla*/ 
		$sql = "select * 
				from FichaTecnica ".$Condicion.$orden;
		//echo $sql;		 
		/*Ejecutamos la query*/ 
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
		
		if ($query)
		{
			/*Realizamos un bucle para ir obteniendo los resultados */
			while ($registro = $bd->obtener_fila($query,0))
			{ 
				$this->idFichaTecnica = $registro['idFichaTecnica'];
			}
		}
		else
		{
			$this->idFichaTecnica = 0;		
		}
		return $query; 
	}
        
        
        function ConsultarVistaFichaTecnicaConectividad($Condicion = '', $Conectividad = '', $orden = '', $campos = '', $grupo = '')
        {

            require_once 'conectividad.class.php';
            $conectividad = new Conectividad();

            $basedatos = $conectividad->ConsultarVistaConectividad($Conectividad);

            if (!empty($Condicion))
            {
                $Condicion = 'where ' . $Condicion;
            }

            if (!empty($orden))
            {
                $orden = ' order by ' . $orden;
            }

            if (empty($campos))
            {
                $campos = ' * ';
            }

            if (!empty($grupo))
            {
                $grupo = ' group by ' . $grupo;
            }

            // iniciamos un select Global que abarque la consulta de cada base de datos, con todos los campos que éstas devuelvan
            if (isset($basedatos[0]['codigoAlternoConectividad']) && $Conectividad != '')
            {
                $totalregistros = count($basedatos);
                $sql = "select $campos from (";
                for ($regcon = 0; $regcon < $totalregistros; $regcon++)
                {
                    $sql .= "(select $campos 
                                    from " . $basedatos[$regcon]["baseDatosConectividad"] . ".viewFichaTecnicaGeneral 
                                    $Condicion 
                                    $grupo 
                                    $orden)";

                    $sql .= (($regcon + 1) < $totalregistros) ? " UNION " : "";
                }
                $sql .= ") Inv 
                            $grupo 
                            $orden";
            } else
            {
                $sql = "select $campos 
                    from viewFichaTecnicaGeneral " . $Condicion . $grupo . $orden;
            }

            /* Creamos una query sencilla */
          //  echo  $sql;
            /* Ejecutamos la query */
            $bd = Db::getInstance();
            $query = $bd->ejecutar($sql);

            $datos = array();
            $i = 0;
            if ($query)
            {
                /* Realizamos un bucle para ir obteniendo los resultados */
                while ($registro = $bd->obtener_fila($query, 0, 1))
                {
                    $datos[$i] = $registro;
                    $i = $i + 1;
                }
            }
            //print_r($datos);
            return $datos;
        }
        
        function ConsultarVistaFichaTecnicaImagenConectividad($Condicion = '', $Conectividad = '', $orden = '', $campos = '', $grupo = '')
        {

            require_once 'conectividad.class.php';
            $conectividad = new Conectividad();

            $basedatos = $conectividad->ConsultarVistaConectividad($Conectividad);

            if (!empty($Condicion))
            {
                $Condicion = 'where ' . $Condicion;
            }

            if (!empty($orden))
            {
                $orden = ' order by ' . $orden;
            }

            if (empty($campos))
            {
                $campos = ' * ';
            }

            if (!empty($grupo))
            {
                $grupo = ' group by ' . $grupo;
            }

            // iniciamos un select Global que abarque la consulta de cada base de datos, con todos los campos que éstas devuelvan
            if (isset($basedatos[0]['codigoAlternoConectividad']) && $Conectividad != '')
            {
                $totalregistros = count($basedatos);
                $sql = "select $campos from (";
                for ($regcon = 0; $regcon < $totalregistros; $regcon++)
                {
                    $sql .= "(select $campos 
                                    from " . $basedatos[$regcon]["baseDatosConectividad"] . ".viewFichaTecnicaImagenes 
                                    $Condicion 
                                    $grupo 
                                    $orden)";

                    $sql .= (($regcon + 1) < $totalregistros) ? " UNION " : "";
                }
                $sql .= ") Inv 
                            $grupo 
                            $orden";
            } else
            {
                $sql = " select $campos 
                    from viewFichaTecnicaImagenes " . $Condicion . $grupo . $orden;
            }

            /* Creamos una query sencilla */
           // echo  $sql;
            /* Ejecutamos la query */
            $bd = Db::getInstance();
            $query = $bd->ejecutar($sql);

            $datos = array();
            $i = 0;
            if ($query)
            {
                /* Realizamos un bucle para ir obteniendo los resultados */
                while ($registro = $bd->obtener_fila($query, 0, 1))
                {
                    $datos[$i] = $registro;
                    $i = $i + 1;
                }
            }
            //print_r($datos);
            return $datos;
        }
        
        function ConsultarVistaFichaTecnicaTallasConectividad($Condicion = '', $Conectividad = '', $orden = '', $campos = '', $grupo = '')
        {

            require_once 'conectividad.class.php';
            $conectividad = new Conectividad();

            $basedatos = $conectividad->ConsultarVistaConectividad($Conectividad);

            if (!empty($Condicion))
            {
                $Condicion = 'where ' . $Condicion;
            }

            if (!empty($orden))
            {
                $orden = ' order by ' . $orden;
            }

            if (empty($campos))
            {
                $campos = ' * ';
            }

            if (!empty($grupo))
            {
                $grupo = ' group by ' . $grupo;
            }

            // iniciamos un select Global que abarque la consulta de cada base de datos, con todos los campos que éstas devuelvan
            if (isset($basedatos[0]['codigoAlternoConectividad']) && $Conectividad != '')
            {
                $totalregistros = count($basedatos);
                $sql = "select $campos from (";
                for ($regcon = 0; $regcon < $totalregistros; $regcon++)
                {
                    $sql .= "(select $campos 
                                    from " . $basedatos[$regcon]["baseDatosConectividad"] . ".viewFichaTecnicaTallas 
                                    $Condicion 
                                    $grupo 
                                    $orden)";

                    $sql .= (($regcon + 1) < $totalregistros) ? " UNION " : "";
                }
                $sql .= ") Inv 
                            $grupo 
                            $orden";
            } else
            {
                $sql = " select $campos 
                    from viewFichaTecnicaTallas " . $Condicion . $grupo . $orden;
            }

            /* Creamos una query sencilla */
           // echo  $sql;
            /* Ejecutamos la query */
            $bd = Db::getInstance();
            $query = $bd->ejecutar($sql);

            $datos = array();
            $i = 0;
            if ($query)
            {
                /* Realizamos un bucle para ir obteniendo los resultados */
                while ($registro = $bd->obtener_fila($query, 0, 1))
                {
                    $datos[$i] = $registro;
                    $i = $i + 1;
                }
            }
            //print_r($datos);
            return $datos;
        }
        
        function ConsultarVistaFichaTecnicaColoresConectividad($Condicion = '', $Conectividad = '', $orden = '', $campos = '', $grupo = '')
        {

            require_once 'conectividad.class.php';
            $conectividad = new Conectividad();

            $basedatos = $conectividad->ConsultarVistaConectividad($Conectividad);

            if (!empty($Condicion))
            {
                $Condicion = 'where ' . $Condicion;
            }

            if (!empty($orden))
            {
                $orden = ' order by ' . $orden;
            }

            if (empty($campos))
            {
                $campos = ' * ';
            }

            if (!empty($grupo))
            {
                $grupo = ' group by ' . $grupo;
            }

            // iniciamos un select Global que abarque la consulta de cada base de datos, con todos los campos que éstas devuelvan
            if (isset($basedatos[0]['codigoAlternoConectividad']) && $Conectividad != '')
            {
                $totalregistros = count($basedatos);
                $sql = "select $campos from (";
                for ($regcon = 0; $regcon < $totalregistros; $regcon++)
                {
                    $sql .= "(select $campos 
                                    from " . $basedatos[$regcon]["baseDatosConectividad"] . ".viewFichaTecnicaColores 
                                    $Condicion 
                                    $grupo 
                                    $orden)";

                    $sql .= (($regcon + 1) < $totalregistros) ? " UNION " : "";
                }
                $sql .= ") Inv 
                            $grupo 
                            $orden";
            } else
            {
                $sql = " select $campos 
                    from viewFichaTecnicaColores " . $Condicion . $grupo . $orden;
            }

            /* Creamos una query sencilla */
           // echo  $sql;
            /* Ejecutamos la query */
            $bd = Db::getInstance();
            $query = $bd->ejecutar($sql);

            $datos = array();
            $i = 0;
            if ($query)
            {
                /* Realizamos un bucle para ir obteniendo los resultados */
                while ($registro = $bd->obtener_fila($query, 0, 1))
                {
                    $datos[$i] = $registro;
                    $i = $i + 1;
                }
            }
            //print_r($datos);
            return $datos;
        }
        
        function ConsultarVistaFichaTecnicaColoresTelaConectividad($Condicion = '', $Conectividad = '', $orden = '', $campos = '', $grupo = '')
        {

            require_once 'conectividad.class.php';
            $conectividad = new Conectividad();

            $basedatos = $conectividad->ConsultarVistaConectividad($Conectividad);

            if (!empty($Condicion))
            {
                $Condicion = 'where ' . $Condicion;
            }

            if (!empty($orden))
            {
                $orden = ' order by ' . $orden;
            }

            if (empty($campos))
            {
                $campos = ' * ';
            }

            if (!empty($grupo))
            {
                $grupo = ' group by ' . $grupo;
            }

            // iniciamos un select Global que abarque la consulta de cada base de datos, con todos los campos que éstas devuelvan
            if (isset($basedatos[0]['codigoAlternoConectividad']) && $Conectividad != '')
            {
                $totalregistros = count($basedatos);
                $sql = "select $campos from (";
                for ($regcon = 0; $regcon < $totalregistros; $regcon++)
                {
                    $sql .= "(select $campos 
                                    from " . $basedatos[$regcon]["baseDatosConectividad"] . ".viewFichaTecnicaColoresTela 
                                    $Condicion 
                                    $grupo 
                                    $orden)";

                    $sql .= (($regcon + 1) < $totalregistros) ? " UNION " : "";
                }
                $sql .= ") Inv 
                            $grupo 
                            $orden";
            } else
            {
                $sql = " select $campos 
                    from viewFichaTecnicaColoresTela " . $Condicion . $grupo . $orden;
            }

            /* Creamos una query sencilla */
           // echo  $sql;
            /* Ejecutamos la query */
            $bd = Db::getInstance();
            $query = $bd->ejecutar($sql);

            $datos = array();
            $i = 0;
            if ($query)
            {
                /* Realizamos un bucle para ir obteniendo los resultados */
                while ($registro = $bd->obtener_fila($query, 0, 1))
                {
                    $datos[$i] = $registro;
                    $i = $i + 1;
                }
            }
            //print_r($datos);
            return $datos;
        }
        
        
        
      /*  function ConsultarIdFichaTecnicaMaquinas($Condicion = '',$orden = '' ) 
        { 
		if(!empty($Condicion))
		{
			$Condicion = ' where '. $Condicion;
		}
		
		if(!empty($orden))
		{
			$orden = ' order by '. $orden;
		}
		
		
		//Creamos una query sencilla
		$sql = "select * 
				from FichaTecnicaMaquinas ".$Condicion.$orden;
		//echo $sql;		 
		//Ejecutamos la query
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
		
		if ($query)
		{
			
			while ($registro = $bd->obtener_fila($query,0))
			{ 
				$this->idFichaTecnicaMaquinas = $registro['idFichaTecnicaMaquinas'];
			}
		}
		else
		{
			$this->idFichaTecnicaMaquinas = 0;		
		}
		return $query; 
	}
	*/
	
	function ConsultarVistaFichaTecnicaGeneral($Condicion = '',$orden = '' ) 
        { 
		if(!empty($Condicion))
		{
			$Condicion = ' where '. $Condicion; 
		}
		
		if(!empty($orden))
		{
			$orden = ' order by '. $orden;
		}
		
		
		/*Creamos una query sencilla*/ 
		$sql = "select * 
				from viewFichaTecnicaGeneral ".$Condicion.$orden;
		/*Ejecutamos la query*/ 
               //echo $sql;
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
		$datos = array();
		$i = 0;
		if ($query)
		{
			/*Realizamos un bucle para ir obteniendo los resultados */
			while ($registro = $bd->obtener_fila($query,0))
			{ 
				$datos[$i] = $registro;
				$i++;
			}
		}
		return $datos; 
	}
	
	
	

	function ConsultarVistaFichaTecnicaCentroProduccion($Condicion = '',$orden = '', $grupo = '' ) 
        { 
		if(!empty($Condicion))
		{
			$Condicion = ' where '. $Condicion;
		}
		
		if(!empty($orden))
		{
			$orden = ' order by '. $orden;
		}
        
        if(!empty($grupo))
		{
			$grupo = ' group by '. $grupo;
		}
		
		/*Creamos una query sencilla*/ 
		$sql = "select * 
				from viewFichaTecnicaCentroProduccion ".$Condicion.$grupo.$orden;
		
        //echo '<br>'.$sql.'<br>'; 
		/*Ejecutamos la query*/ 
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
		$datos = array();
		$i = 0;
		if ($query)
		{
			/*Realizamos un bucle para ir obteniendo los resultados */
			while ($registro = $bd->obtener_fila($query,0))
			{ 
				$datos[$i] = $registro;
				$i++;
			}
		}
		return $datos; 
	}


	function ConsultarVistaFichaTecnicaVariantes($Condicion = '') 
        { 
		if(!empty($Condicion))
		{
			$Condicion = ' where '. $Condicion;
		}
		
		/*Creamos una query sencilla*/ 
		$sql = "select * 
				from viewFichaTecnicaVariantes ".$Condicion;
				 
		/*Ejecutamos la query*/ 
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
		$datos = array();
		$i = 0;
		if ($query)
		{
			/*Realizamos un bucle para ir obteniendo los resultados */
			while ($registro = $bd->obtener_fila($query,0))
			{ 
				$datos[$i] = $registro;
				$i++;
			}
		}
		return $datos; 
	}

	function ConsultarVistaFichaTecnicaCombinaciones($Condicion = '', $orden='') 
        { 
		if(!empty($Condicion))
		{
			$Condicion = ' where '. $Condicion;
		}
		if(!empty($orden))
		{
			$orden = ' order by  '. $orden;
		}
		
		/*Creamos una query sencilla*/ 
		$sql = "select * 
				from viewFichaTecnicaCombinaciones ".$Condicion.$orden;
				 
		/*Ejecutamos la query*/
		
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
		$datos = array();
		$i = 0;
		if ($query)
		{
			/*Realizamos un bucle para ir obteniendo los resultados */
			while ($registro = $bd->obtener_fila($query,0))
			{ 
				$datos[$i] = $registro;
				$i++;
			}
		}
		return $datos; 
	}
	
	function ConsultarVistaFichaTecnicaEspecificaciones($Condicion = '', $orden='') 
        { 
		if(!empty($Condicion))
		{
			$Condicion = ' where '. $Condicion;
		}
		if(!empty($orden))
		{
			$orden = ' order by  '. $orden;
		}
		
		/*Creamos una query sencilla*/ 
		$sql = "select * 
				from viewFichaTecnicaEspecificacion ".$Condicion.$orden;
				 
		/*Ejecutamos la query*/
		
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
		$datos = array();
		$i = 0;
		if ($query)
		{
			/*Realizamos un bucle para ir obteniendo los resultados */
			while ($registro = $bd->obtener_fila($query,0))
			{ 
				$datos[$i] = $registro;
				$i++;
			}
		}
		return $datos; 
	}
	
	
	function ConsultarVistaFichaTecnicaComponentes($Condicion = '', $orden='', $campos = '', $grupo = '') 
        { 
	
		if(!empty($Condicion))
		{
			$Condicion = ' where '. $Condicion;
		}
		if(!empty($orden))
		{
			$orden = ' order by '. $orden;
		}
		
		if(empty($campos))
		{
			$campos = ' * ';
		}
		if(!empty($grupo))
		{
			$grupo = ' group by '. $grupo;
		}
		
		/*Creamos una query sencilla*/ 
		$sql = "select $campos 
				from viewFichaTecnicaComponente ".$Condicion . $grupo . $orden;
				 
		/*Ejecutamos la query*/
	//	echo $sql;
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
		$datos = array();
		$i = 0;
		if ($query)
		{
			/*Realizamos un bucle para ir obteniendo los resultados */
			while ($registro = $bd->obtener_fila($query,0))
			{ 
				$datos[$i] = $registro;
				$i++;
			}
		}
		return $datos; 
	}
	
	
	function ConsultarVistaFichaTecnicaEmpaque($Condicion = '', $orden='', $campos = '', $grupo = '') 
        { 
	
		if(!empty($Condicion))
		{
			$Condicion = ' where '. $Condicion;
		}
		if(!empty($orden))
		{
			$orden = ' order by '. $orden;
		}
		
		if(empty($campos))
		{
			$campos = ' * ';
		}
		if(!empty($grupo))
		{
			$grupo = ' group by '. $grupo;
		}
		
		/*Creamos una query sencilla*/ 
		$sql = "select $campos 
				from viewFichaTecnicaEmpaque ".$Condicion . $grupo . $orden;
				 
		/*Ejecutamos la query*/
		
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
		$datos = array();
		$i = 0;
		if ($query)
		{
			/*Realizamos un bucle para ir obteniendo los resultados */
			while ($registro = $bd->obtener_fila($query,0))
			{ 
				$datos[$i] = $registro;
				$i++;
			}
		}
		return $datos; 
	}
	
	
	function ConsultarVistaFichaTecnicaTallas($Condicion = '', $orden= '') 
        { 
		if(!empty($Condicion))
		{
			$Condicion = ' where '. $Condicion;
		}
		if(!empty($orden))
		{
			$orden = ' order by '. $orden;
		}
		/*Creamos una query sencilla*/ 
		$sql = "select * 
				from viewFichaTecnicaTallas ".$Condicion.$orden;
				 
		/*Ejecutamos la query*/ 
		//echo($sql);
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
		$datos = array();
		$i = 0;
		if ($query)
		{
			/*Realizamos un bucle para ir obteniendo los resultados */
			while ($registro = $bd->obtener_fila($query,0))
			{ 
				$datos[$i] = $registro;
				$i++;
			}
		}
		return $datos; 
	}
	
	
	function ConsultarVistaFichaTecnicaTallaComplemento($Condicion = '', $orden= '') 
        { 
		if(!empty($Condicion))
		{
			$Condicion = ' where '. $Condicion;
		}
		if(!empty($orden))
		{
			$orden = ' order by '. $orden;
		}
		/*Creamos una query sencilla*/ 
		$sql = "select * 
				from viewFichaTecnicaTallaComplemento ".$Condicion.$orden;
				 
		//echo $sql;
		/*Ejecutamos la query*/ 
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
		$datos = array();
		$i = 0;
		if ($query)
		{
			/*Realizamos un bucle para ir obteniendo los resultados */
			while ($registro = $bd->obtener_fila($query,0))
			{ 
				$datos[$i] = $registro;
				$i++;
			}
		}
		return $datos; 
	}
	
	function ConsultarVistaFichaTecnicaColores($Condicion = '', $orden='') 
        { 
		if(!empty($Condicion))
		{
			$Condicion = ' where '. $Condicion;
		}
		if(!empty($orden))
		{
			$orden = ' order by '. $orden;
		}
		/*Creamos una query sencilla*/ 
		$sql = "select * 
				from viewFichaTecnicaColores ".$Condicion. $orden;
				 
		/*Ejecutamos la query*/ 
		//echo($sql);
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
		$datos = array();
		$i = 0;
		if ($query)
		{
			/*Realizamos un bucle para ir obteniendo los resultados */
			while ($registro = $bd->obtener_fila($query,0))
			{ 
				$datos[$i] = $registro;
				$i++;
			}
		}
		return $datos; 
	}


	function ConsultarVistaFichaTecnicaImagenes($Condicion = '', $orden = '') 
        { 
		if(!empty($Condicion))
		{
			$Condicion = ' where '. $Condicion;
		}
		if(!empty($orden))
		{
			$orden = ' order by '. $orden;
		}
		/*Creamos una query sencilla*/ 
		$sql = "select * 
				from viewFichaTecnicaImagenes ".$Condicion.$orden;
				 
		/*Ejecutamos la query*/ 
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
		$datos = array();
		$i = 0;
		if ($query)
		{
			/*Realizamos un bucle para ir obteniendo los resultados */
			while ($registro = $bd->obtener_fila($query,0))
			{ 
				$datos[$i] = $registro;
				$i++;
			}
		}
		return $datos; 
	}
	
	

	function ConsultarVistaFichaTecnicaPiezas($Condicion = '', $orden='') 
        { 
		if(!empty($Condicion))
		{
			$Condicion = ' where '. $Condicion;
		}
		
		if(!empty($orden))
		{
			$orden = ' order by '. $orden;
		}
		
		/*Creamos una query sencilla*/ 
		$sql = "select * 
				from viewFichaTecnicaPiezas ".$Condicion.$orden;
				 
		/*Ejecutamos la query*/ 
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
		$datos = array();
		$i = 0;
		if ($query)
		{
			/*Realizamos un bucle para ir obteniendo los resultados */
			while ($registro = $bd->obtener_fila($query,0))
			{ 
				$datos[$i] = $registro;
				$i++;
			}
		}
		return $datos; 
	}

	function ConsultarVistaFichaTecnicaConstruccion($Condicion = '',$orden = '') 
        { 
		if(!empty($Condicion))
		{
			$Condicion = ' where '. $Condicion;
		}
		if(!empty($orden))
		{
			$orden = ' order by '. $orden;
		}
		/*Creamos una query sencilla*/ 
		$sql = "select * 
				from viewFichaTecnicaConstruccion ".$Condicion.$orden;
				 
		/*Ejecutamos la query*/ 
		
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
		$datos = array();
		$i = 0;
		if ($query)
		{
			/*Realizamos un bucle para ir obteniendo los resultados */
			while ($registro = $bd->obtener_fila($query,0))
			{ 
				$datos[$i] = $registro;
				$i++;
			}
		}
		return $datos; 
	}


	function ConsultarVistaFichaTecnicaMateriales($Condicion = '',$orden = '') 
        { 
		if(!empty($Condicion))
		{
			$Condicion = ' where '. $Condicion;
		}
		
		if(!empty($orden))
		{
			$orden = ' order by '. $orden;
		}
		
		/*Creamos una query sencilla*/ 
		$sql = "select * 
				from viewFichaTecnicaMaterial ".$Condicion. $orden;
				 
		/*Ejecutamos la query*/ 
		//echo ($sql);
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
		$datos = array();
		$i = 0;
		if ($query)
		{
			/*Realizamos un bucle para ir obteniendo los resultados */
			while ($registro = $bd->obtener_fila($query,0))
			{ 
				$datos[$i] = $registro;
				$i++;
			}
		}
		return $datos; 
	}
    
	function ConsultarVistaFichaTecnicaMaterialesAdicionales($Condicion = '',$orden = '') 
        { 
		if(!empty($Condicion))
		{
			$Condicion = ' where '. $Condicion;
		}
		
		if(!empty($orden))
		{
			$orden = ' order by '. $orden;
		}
		
		/*Creamos una query sencilla*/ 
		$sql = "select * 
				from viewFichaTecnicaMaterialAdicional ".$Condicion. $orden;
				 
		/*Ejecutamos la query*/ 
		//echo ($sql);
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
		$datos = array();
		$i = 0;
		if ($query)
		{
			/*Realizamos un bucle para ir obteniendo los resultados */
			while ($registro = $bd->obtener_fila($query,0))
			{ 
				$datos[$i] = $registro;
				$i++;
			}
		}
		return $datos; 
	}



	
	function ConsultarVistaFichaTecnicaMedidas($Condicion = '',$orden = '') 
        { 
		if(!empty($Condicion))
		{
			$Condicion = ' where '. $Condicion;
		}
		
		if(!empty($orden))
		{
			$orden = ' order by '. $orden;
		}
		
		/*Creamos una query sencilla*/ 
		$sql = "select * 
				from viewFichaTecnicaMedidas ".$Condicion. $orden;
				 
       // echo '<br>'.$sql.'<br>';
		/*Ejecutamos la query*/ 
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
		$datos = array();
		$i = 0;
		if ($query)
		{
			/*Realizamos un bucle para ir obteniendo los resultados */
			while ($registro = $bd->obtener_fila($query,0))
			{ 
				$datos[$i] = $registro;
				$i++;
			}
		}
		return $datos; 
	}
	
	
	
	function ConsultarVistaFichaTecnicaAdjuntos($Condicion = '') 
        { 
		if(!empty($Condicion))
		{
			$Condicion = ' where '. $Condicion;
		}
		
		/*Creamos una query sencilla*/ 
		$sql = "select * 
				from viewFichaTecnicaAdjuntos ".$Condicion;
				 
		/*Ejecutamos la query*/ 
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
		$datos = array();
		$i = 0;
		if ($query)
		{
			/*Realizamos un bucle para ir obteniendo los resultados */
			while ($registro = $bd->obtener_fila($query,0))
			{ 
				$datos[$i] = $registro;
				$i++;
			}
		}

		return $datos; 
	}


	function ConsultarVistaFichaTecnicaOperacion($Condicion = '',$orden = '', $campos = '') 
        { 
		if(!empty($Condicion))
		{
			$Condicion = ' where '. $Condicion;
		}
		
		if(!empty($orden))
		{
			$orden = ' order by '. $orden;
		}
		
                if(empty($campos))
		{
			$campos = ' * ';
		} 
                
		/*Creamos una query sencilla*/ 
		$sql = "select $campos 
				from viewFichaTecnicaOperacion ".$Condicion. $orden;
				 
         //echo $sql;
		/*Ejecutamos la query*/ 
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
		$datos = array();
		$i = 0;
		if ($query)
		{
			/*Realizamos un bucle para ir obteniendo los resultados */
			while ($registro = $bd->obtener_fila($query,0))
			{ 
				$datos[$i] = $registro;
				$i++;
			}
		}
		return $datos; 
	}
        
        
        
        
        
        
        

	function ConsultarVistaFichaTecnicaCostoIndirecto($Condicion = '') 
        { 
		if(!empty($Condicion))
		{
			$Condicion = ' where '. $Condicion;
		}
		
		/*Creamos una query sencilla*/ 
		$sql = "select * 
				from viewFichaTecnicaCostoIndirecto ".$Condicion;
				 
		/*Ejecutamos la query*/ 
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
		$datos = array();
		$i = 0;
		if ($query)
		{
			/*Realizamos un bucle para ir obteniendo los resultados */
			while ($registro = $bd->obtener_fila($query,0))
			{ 
				$datos[$i] = $registro;
				$i++;
			}
		}
		return $datos; 
	}
	
	function ConsultarVistaFichaTecnicaCostoAdicional($Condicion = '') 
    { 
		if(!empty($Condicion))
		{
			$Condicion = ' where '. $Condicion;
		}
		
		/*Creamos una query sencilla*/ 
		$sql = "select * 
				from viewFichaTecnicaCostoAdicional ".$Condicion;
				 
		/*Ejecutamos la query*/ 
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
                echo $sql;
		$datos = array();
		$i = 0;
		if ($query)
		{
			/*Realizamos un bucle para ir obteniendo los resultados */
			while ($registro = $bd->obtener_fila($query,0))
			{ 
				$datos[$i] = $registro;
				$i++;
			}
		}
		return $datos; 
	}
	
	function ConsultarVistaFichaTecnicaPrecioFicha($Condicion = '') 
        { 
		if(!empty($Condicion))
		{
			$Condicion = ' where '. $Condicion;
		}
		
		/*Creamos una query sencilla*/ 
		$sql = "select * 
				from viewFichaTecnicaPrecioFicha ".$Condicion;
				 
		/*Ejecutamos la query*/ 
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
		$datos = array();
		$i = 0;
		if ($query)
		{
			/*Realizamos un bucle para ir obteniendo los resultados */
			while ($registro = $bd->obtener_fila($query,0))
			{ 
				$datos[$i] = $registro;
				$i++;
			}
		}
		return $datos; 
	}    
        
        
        function ConsultarVistaFichaTecnicaDatosTecnicos($Condicion = '') 
        { 
		if(!empty($Condicion))
		{
			$Condicion = ' where '. $Condicion;
		}
		
		/*Creamos una query sencilla*/ 
		$sql = "Select idFichaTecnicaDatosTecnicos, FichaTecnica_idFichaTecnica, nombreDatosTecnicos, medidaDatosTecnicos, baseDatosTecnicos, promedioFichaTecnicaDatosTecnicos, toleranciaFichaTecnicaDatosTecnicos
                        From FichaTecnicaDatosTecnicos dt
                        Left join FichaTecnica ft
                        on dt.FichaTecnica_idFichaTecnica = ft.idFichaTecnica
                        left join DatosTecnicos d
                        on dt.idFichaTecnicaDatosTecnicos = d.idDatosTecnicos ".$Condicion;
				 
		/*Ejecutamos la query*/ 
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
		$datos = array();
		$i = 0;
		if ($query)
		{
			/*Realizamos un bucle para ir obteniendo los resultados */
			while ($registro = $bd->obtener_fila($query,0))
			{ 
				$datos[$i] = $registro;
				$i++;
			}
		}
		return $datos; 
	}    
        
        function ConsultarVistaFichaTecnicaTintoreria($Condicion = '') 
        { 
		if(!empty($Condicion))
		{
			$Condicion = ' where '. $Condicion;
		}
		
		/*Creamos una query sencilla*/ 
		$sql = "Select idFichaTecnicaTintoreria, FichaTecnica_idFichaTecnica, nombreFichaTecnicaTintoreria, cantidadFichaTecnicaTintoreria
                        From FichaTecnicaTintoreria tin
                        Left join FichaTecnica ft
                        on tin.FichaTecnica_idFichaTecnica = ft.idFichaTecnica".$Condicion;
			
                
              // echo $sql;
		/*Ejecutamos la query*/ 
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
		$datos = array();
		$i = 0;
		if ($query)
		{
			/*Realizamos un bucle para ir obteniendo los resultados */
			while ($registro = $bd->obtener_fila($query,0))
			{ 
				$datos[$i] = $registro;
				$i++;
			}
		}
		return $datos; 
	}
  
        
        function ConsultarVistaFichaTecnicaPinta($Condicion = '') 
        { 
		if(!empty($Condicion))
		{
			$Condicion = ' where '. $Condicion;
		}
		
		/*Creamos una query sencilla*/ 
		$sql = "select idFichaTecnicaPinta, FichaTecnica_idFichaTecnica, codigoAlternoPinta, nombrePinta, ftp.Pinta_idPinta ,ftp.Predominante_idColor
                        from FichaTecnicaPinta ftp 
                        left join FichaTecnica ft on ftp.FichaTecnica_idFichaTecnica = ft.idFichaTecnica 
                        left join Pinta p on ftp.Pinta_idPinta = p.idPinta ".$Condicion;
                
               //echo "<br>ConsultaPintas: ".$sql."<br>";
				 
		/*Ejecutamos la query*/ 
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
		$datos = array();
		$i = 0;
		if ($query)
		{
			/*Realizamos un bucle para ir obteniendo los resultados */
			while ($registro = $bd->obtener_fila($query,0))
			{ 
				$datos[$i] = $registro;
				$i++;
			}
		}
		return $datos; 
	}  
       
        function ConsultarVistaFichaTecnicaPintaColor($Condicion = '') 
        { 
		if(!empty($Condicion))
		{
			$Condicion = ' where '. $Condicion;
		}
		
		/*Creamos una query sencilla*/ 
		$sql = " select pintacol.*, fp.*, nombre1Color, codigoAlternoColor
                        from FichaTecnicaPintaColor pintacol
                        left join FichaTecnicaPinta fp
                        on pintacol.FichaTecnicaPinta_idFichaTecnicaPinta = fp.idFichaTecnicaPinta
                        left join Color c
                        on pintacol.Color_idPintaColor = c.idColor ".$Condicion;
                
//               echo "<br>".$sql;
				 
		/*Ejecutamos la query*/ 
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
		$datos = array();
		$i = 0;
		if ($query)
		{
			/*Realizamos un bucle para ir obteniendo los resultados */
			while ($registro = $bd->obtener_fila($query,0))
			{ 
				$datos[$i] = $registro;
				$i++;
			}
		}
		return $datos; 
	}   
        

        
        function ConsultarVistaColorPinta($Condicion = '', $orden = '', $campos = '', $grupo = '') 
        { 
	
		if (!empty($Condicion))
		{
			$Condicion = 'where ' . $Condicion;
		}
		if (!empty($orden))
		{
			$orden = ' order by ' . $orden;
		}

		if (empty($campos))
		{
			$campos = ' * ';
		}
		if (!empty($grupo))
		{
			$grupo = ' group by ' . $grupo;
		}
		
		/*Creamos una query sencilla*/ 
		$sql = "select $campos 
			from Color  ". $Condicion . $grupo . $orden;
		/*Ejecutamos la query*/ 
		//echo $sql;
		
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql);
		$datos = array();		
		$i = 0;
		if ($query)
		{
			/*Realizamos un bucle para ir obteniendo los resultados */
			while ($registro = $bd->obtener_fila($query,0))
			{ 
				$datos[$i] = $registro;
				$i = $i+1;
			}
		}
		//print_r($datos);
		return $datos; 
		
	} // fin de operacion ConsultarVista
        
        function ConsultarVistaFichaTecnicaNotas($Condicion = '') 
        { 
		if(!empty($Condicion))
		{
			$Condicion = ' where '. $Condicion;
		}
		
		/*Creamos una query sencilla*/ 
		$sql = " select ftn.*, nombreLogin
                        FROM FichaTecnicaNotas as ftn               
                        left join FichaTecnica ft
                        on ftn.FichaTecnica_idFichaTecnica = ft.idFichaTecnica
                        LEFT JOIN SegLogin as log 
                        on ftn.SegLogin_idUsuario = log.id ".$Condicion;
                
               // echo $sql;
				 
		/*Ejecutamos la query*/ 
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
		$datos = array();
		$i = 0;
		if ($query)
		{
			/*Realizamos un bucle para ir obteniendo los resultados */
			while ($registro = $bd->obtener_fila($query,0))
			{ 
				$datos[$i] = $registro;
				$i++;
			}
		}
		return $datos; 
	}  
       
        function ConsultarIdFichaTecnicaMaquinas($Condicion = '')
        {

              if (!empty($Condicion))
              {
                      $Condicion = ' where ' . $Condicion;
              }


              $sql = "select * from FichaTecnicaMaquinas " . $Condicion;
            // echo $sql."<br>";
              $bd = Db::getInstance();
              $query = $bd->ejecutar($sql);
              if ($query)
              {
                      /* Realizamos un bucle para ir obteniendo los resultados */
                      while ($registro = $bd->obtener_fila($query, 0))
                      {
                              $this->idFichaTecnicaMaquinasAux = $registro["idFichaTecnicaMaquinas"];
                      }
              }
              else
              {
                      $this->idFichaTecnicaMaquinasAux = 0;
              }
                
              return $query;
          }
       
        function ConsultarIdFichaTecnicaPinta($Condicion = '')
        {

              if (!empty($Condicion))
              {
                      $Condicion = ' where ' . $Condicion;
              }


              $sql = "select * from FichaTecnicaPinta " . $Condicion;
             //echo $sql."<br>";
              $bd = Db::getInstance();
              $query = $bd->ejecutar($sql);
//              echo "<br>Cunsultar Id Ficha Pinta: ".$sql."<br>";
              if ($query)
              {
                      /* Realizamos un bucle para ir obteniendo los resultados */
                      while ($registro = $bd->obtener_fila($query, 0))
                      {
                              $this->idFichaTecnicaPintaAux = $registro["idFichaTecnicaPinta"];
//                              echo "<br> respuesta de id: ".$registro["idFichaTecnicaPinta"]."<br>";
                      }
              }
              else
              {
                      $this->idFichaTecnicaPintaAux = 0;
              }
                
              return $query;
          }
        
        function ConsultarVistaFichaTecnicaMaquinas($Condicion = '') 
        { 
		if(!empty($Condicion))
		{
			$Condicion = ' where '. $Condicion;
		}
		
		/*Creamos una query sencilla*/ 
		$sql = "select ftm.*, rp.*
                        from FichaTecnicaMaquinas ftm
                        left join FichaTecnica ft
                        on ftm.FichaTecnica_idFichaTecnica = ft.idFichaTecnica
                        left join RecursoProduccion rp
                        on ftm.RecursoProduccion_idRecursoProduccion = rp.idRecursoProduccion".$Condicion;
                
               //echo $sql;
				 
		/*Ejecutamos la query*/ 
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
		$datos = array();
		$i = 0;
		if ($query)
		{
			/*Realizamos un bucle para ir obteniendo los resultados */
			while ($registro = $bd->obtener_fila($query,0))
			{ 
				$datos[$i] = $registro;
				$i++;
			}
		}
		return $datos; 
	}   
        function ConsultarVistaFichaTecnicaMaquinasPistas($Condicion = '') 
        { 
		if(!empty($Condicion))
		{
			$Condicion = ' where '. $Condicion;
		}
		
		/*Creamos una query sencilla*/ 
		$sql = "select ft.*, pi.*
                        from FichaTecnicaMaquinasPistas pi
                        left join FichaTecnicaMaquinas ft
                        on pi.FichaTecnicaMaquinas_idFichaTecnicaMaquinas = ft.idFichaTecnicaMaquinas".$Condicion;
                
              // echo "<br>".$sql;
				 
		/*Ejecutamos la query*/ 
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
		$datos = array();
		$i = 0;
		if ($query)
		{
			/*Realizamos un bucle para ir obteniendo los resultados */
			while ($registro = $bd->obtener_fila($query,0))
			{ 
				$datos[$i] = $registro;
				$i++;
			}
		}
		return $datos; 
	}   
        

        
        function ConsultarVistaFichaTecnicaColorTela($Condicion = '') 
        { 
		if(!empty($Condicion))
		{
			$Condicion = ' where '. $Condicion;
		}
		
		/*Creamos una query sencilla*/ 
		$sql = "select ftc.*, codigoAlternoColor, nombre1Color, 
                        codigoAlterno1Tercero,ftc.Tercero_idTercero, nombre1Tercero,
                        ftc.Color_idColor, nombreTono, com.nombreComposicion
                        from FichaTecnicaColorTela ftc
                        left join FichaTecnica ft
                        on ftc.FichaTecnica_idFichaTecnica = ft.idFichaTecnica
                        left join Color c
                        on ftc.Color_idColor = c.idColor
                        left join Tercero terc
                        on ftc.Tercero_idTercero = terc.idTercero
                        left join Tono ton
                        on ftc.Tono_idTono=ton.idTono
                        left join Composicion com
                        on ftc.Composicion_idFolder = com.idComposicion  ".$Condicion;
				 
		/*Ejecutamos la query*/ 
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
		$datos = array();
		$i = 0;
		if ($query)
		{
			/*Realizamos un bucle para ir obteniendo los resultados */
			while ($registro = $bd->obtener_fila($query,0))
			{ 
				$datos[$i] = $registro;
				$i++;
			}
		}
		return $datos; 
	}  
        
        function ConsultarVistaHilaza($Condicion = '', $orden = '', $campos = '', $grupo = '')
        {

           if(!empty($Condicion)) 
           {
              $Condicion = ' Where ' .$Condicion;
           }
 
            if (!empty($orden)) 
            {
             
                $orden = ' Order By ' . $orden;
            }
            if(empty($campos))
            {
       
                    $campos = '*';
            }

            if(!empty($grupo))
            {
              
                    $grupo = ' group by '. $grupo;
            }

            $sql = "select $campos
                    from FichaTecnicaHilaza " . $Condicion . $grupo . $orden;
           // echo $sql;
            $bd = Db::getInstance();
            
            $query = $bd->ejecutar($sql); 
            $datos = array();
            $i = 0;
            if ($query)
            {
                while ($registro = $bd->obtener_fila($query,0))
                { 
                    $datos[$i] = $registro;
                    $i++;
                }
            }

            return $datos;  
        }
        
        
        function ConsultarVistaHilazaDetalle($Condicion = '', $orden = '', $campos = '', $grupo = '')
        {

           if(!empty($Condicion)) 
           {
              $Condicion = ' Where ' .$Condicion;
           }
 
            if (!empty($orden)) 
            {
             
                $orden = ' Order By ' . $orden;
            }
            if(empty($campos))
            {
       
                    $campos = '*';
            }

            if(!empty($grupo))
            {
              
                    $grupo = ' group by '. $grupo;
            }

            $sql = " SELECT $campos
                    FROM FichaTecnicaHilaza fth
                    left join FichaTecnicaHilazaComposicion fthc
                    on fth.FichaTecnica_idFichaTecnica = fthc.FichaTecnica_idFichaTecnica and fth.idFichaTecnicaHilaza = fthc.FichaTecnicaHilaza_idFichaTecnicaHilaza
                    left join Composicion c
                    on fthc.Composicion_idComposicionHilaza = c.idComposicion 
                    left join Tercero ter
                    on ter.idTercero = fth.Tercero_idProveedorHilo " . $Condicion . $grupo . $orden;
          //  echo $sql;
            $bd = Db::getInstance();
            
            $query = $bd->ejecutar($sql); 
            $datos = array();
            $i = 0;
            if ($query)
            {
                while ($registro = $bd->obtener_fila($query,0))
                { 
                    $datos[$i] = $registro;
                    $i++;
                }
            }

            return $datos;  
        }
        
        
	//ADICION DE  Maquinas	
	function AdicionarFichaTecnicaMaquinas($id, $item) 
        { 

                    $sql="insert into FichaTecnicaMaquinas(
                                            idFichaTecnicaMaquinas,
                                            FichaTecnica_idFichaTecnica,
                                            RecursoProduccion_idRecursoProduccion,
                                            porDefectoFichaTecnicaMaquinas,
                                            numeroDientesIzquierdosFichaTecnicaMaquinas,
                                            numeroDientesCentroFichaTecnicaMaquinas,
                                            numeroDientesDerechoFichaTecnicaMaquinas,
                                            tiempoFichaTecnicaMaquinas,
                                            mallasCrudoFichaTecnicaMaquinas,
                                            columnasCrudoFichaTecnicaMaquinas,
                                            puntadaAlturaFichaTecnicaMaquinas,
                                            alturaDialFichaTecnicaMaquinas,
                                            elongacionAnchoFichaTecnicaMaquinas,
                                            elongacionLargoFichaTecnicaMaquinas,
                                            anchoExpanderFichaTecnicaMaquinas,
                                            recobradorFichaTecnicaMaquinas,
                                            pesoRodajaMaquinaRealFichaTecnicaMaquinas,
                                            pesoRodajaMaquinaTeoricaFichaTecnicaMaquinas,
                                            notasFichaTecnicaMaquinas,
                                            opcionRecobradorFichaTecnicaMaquinas,
                                            gradosFichaTecnicaMaquinas,
                                            profundidadFichaTecnicaMaquinas,
                                            pinoneriaIzquierdoFichaTecnicaMaquinas,
                                            pinoneriaCentroFichaTecnicaMaquinas,
                                            pinoneriaDerechoFichaTecnicaMaquinas,
                                            rpmMinutoFichaTecnicaMaquinas,
                                            minutoDisFichaTecnicaMaquinas,
                                            vueltasDiasFichaTecnicaMaquinas,
                                            vueltasRollosFichaTecnicaMaquinas,
                                            numeroRollosFichaTecnicaMaquinas,
                                            kilosRolloFichaTecnicaMaquinas,
                                            produccionHorasCienFichaTecnicaMaquinas,
                                            produccionHorasOchentaFichaTecnicaMaquinas,
                                            kilosTurnoDoceHorasFichaTecnicaMaquinas,
                                            rollosTurnoDoceHorasFichaTecnicaMaquinas,
                                            kilosTurnoOchoHorasFichaTecnicaMaquinas,
                                            rollosTurnoOchoHorasFichaTecnicaMaquinas,
                                            anchoCrudoFichaTecnicaMaquinas,
                                            rendimientoCrudoFichaTecnicaMaquinas,
                                            pesoCrudoFichaTecnicaMaquinas)".
                                  " values (".$this->idFichaTecnicaMaquinas[$item].", ".
                                            "'".$id."', ".
                                            "'".$this->RecursoProduccion_idRecursoProduccion[$item]."', ".
                                            "'".$this->porDefectoFichaTecnicaMaquinas[$item]."', ".
                                            "'".$this->numeroDientesIzquierdosFichaTecnicaMaquinas[$item]."', ".
                                            "'".$this->numeroDientesCentroFichaTecnicaMaquinas[$item]."', ".
                                            "'".$this->numeroDientesDerechoFichaTecnicaMaquinas[$item]."', ".
                                            "'".$this->tiempoFichaTecnicaMaquinas[$item]."', ".
                                            "'".$this->mallasCrudoFichaTecnicaMaquinas[$item]."', ".
                                            "'".$this->columnasCrudoFichaTecnicaMaquinas[$item]."', ".
                                            "'".$this->puntadaAlturaFichaTecnicaMaquinas[$item]."', ".
                                            "'".$this->alturaDialFichaTecnicaMaquinas[$item]."', ".
                                            "'".$this->elongacionAnchoFichaTecnicaMaquinas[$item]."', ".
                                            "'".$this->elongacionLargoFichaTecnicaMaquinas[$item]."', ".
                                            "'".$this->anchoExpanderFichaTecnicaMaquinas[$item]."', ".
                                            "'".$this->recobradorFichaTecnicaMaquinas[$item]."', ".
                                            "'".$this->pesoRodajaMaquinaRealFichaTecnicaMaquinas[$item]."', ".
                                            "'".$this->pesoRodajaMaquinaTeoricaFichaTecnicaMaquinas[$item]."', ".
                                            "'".$this->notasFichaTecnicaMaquinas[$item]."', ".
                                            "'".$this->opcionRecobradorFichaTecnicaMaquinas[$item]."', ".
                                            "'".$this->gradosFichaTecnicaMaquinas[$item]."', ".
                                            "'".$this->profundidadFichaTecnicaMaquinas[$item]."', ".
                                            "'".$this->pinoneriaIzquierdoFichaTecnicaMaquinas[$item]."', ".
                                            "'".$this->pinoneriaCentroFichaTecnicaMaquinas[$item]."', ".
                                            "'".$this->pinoneriaDerechoFichaTecnicaMaquinas[$item]."', ".                            
                                            "'".$this->rpmMinutoFichaTecnicaMaquinas[$item]."', ".                            
                                            "'".$this->minutoDisFichaTecnicaMaquinas[$item]."', ".
                                            "'".$this->vueltasDiasFichaTecnicaMaquinas[$item]."', ".
                                            "'".$this->vueltasRollosFichaTecnicaMaquinas[$item]."', ".
                                            "'".$this->numeroRollosFichaTecnicaMaquinas[$item]."', ".
                                            "'".$this->kilosRolloFichaTecnicaMaquinas[$item]."', ".
                                            "'".$this->produccionHorasCienFichaTecnicaMaquinas[$item]."', ".
                                            "'".$this->produccionHorasOchentaFichaTecnicaMaquinas[$item]."', ".
                                            "'".$this->kilosTurnoDoceHorasFichaTecnicaMaquinas[$item]."', ".
                                            "'".$this->rollosTurnoDoceHorasFichaTecnicaMaquinas[$item]."', ".
                                            "'".$this->kilosTurnoOchoHorasFichaTecnicaMaquinas[$item]."', ".
                                            "'".$this->rollosTurnoOchoHorasFichaTecnicaMaquinas[$item]."', ".  
                                            "'".$this->anchoCrudoFichaTecnicaMaquinas[$item]."', ".   
                                            "'".$this->rendimientoCrudoFichaTecnicaMaquinas[$item]."', ".  
                                            "'".$this->pesoCrudoFichaTecnicaMaquinas[$item]."'); ";
//                     echo '<br>'.$sql.'<br>';    
                    //Ejecutamos la query 
                    $bd = Db::getInstance();
                    $query = $bd->ejecutar($sql); 
                    
   
		   //GRABAMOS Las Pistas que estan dentro de cada maquina
                    $this->EliminarFichaTecnicaMaquinasPistas("FichaTecnicaMaquinas_idFichaTecnicaMaquinas = ".$this->idFichaTecnicaMaquinas[$item], "") ;
                   // consultamos el id de la nueva ficha insertada para tomerlo en la grabacion de los detalles
                    $this->ConsultarIdFichaTecnicaMaquinas("RecursoProduccion_idRecursoProduccion = ".$this->RecursoProduccion_idRecursoProduccion[$item]." and columnasCrudoFichaTecnicaMaquinas = '".$this->columnasCrudoFichaTecnicaMaquinas[$item]."'", "");
                    //$this->ConsultarIdFichaTecnicaMaquinas("RecursoProduccion_idRecursoProduccion ='".$this->RecursoProduccion_idRecursoProduccion[$item]."' and FichaTecnica_idFichaTecnica = '".$this->nombreCompetencia[$item]."'");
                    $n = isset($this->idFichaTecnicaMaquinasPistas[$item]) ? count($this->idFichaTecnicaMaquinasPistas[$item]) : 0;
                    for($i2=0; $i2<$n; $i2++)
                    {
                       $this->AdicionarFichaTecnicaMaquinasPistas($i2, $item );
                    }
                    return $query;
        } 
        

	
	//ADICION DE Maquinas Pistas	
	function AdicionarFichaTecnicaMaquinasPistas($item, $itemdet) 
        { 
                $sql="insert into FichaTecnicaMaquinasPistas(
                                        idFichaTecnicaMaquinasPistas,
                                        FichaTecnicaMaquinas_idFichaTecnicaMaquinas,
                                        numeroFichaTecnicaMaquinasPistas,
                                        profundidadFichaTecnicaMaquinasPistas,
                                        puntosFichaTecnicaMaquinasPistas,
                                        metroRevolucionFichaTecnicaMaquinasPistas,
                                        longMallaIzquierdoFichaTecnicaMaquinasPistas,
                                        nonioVueltasFichaTecnicaMaquinasPistas,
                                        nonioNumeroFichaTecnicaMaquinasPistas,
                                        tensionHiloFichaTecnicaMaquinasPistas,
                                        descripcionFichaTecnicaMaquinasPistas)".
                              " values (".$this->idFichaTecnicaMaquinasPistas[$itemdet][$item].", ".
                                        "'".$this->idFichaTecnicaMaquinasAux."', ".
                                        "'".$this->numeroFichaTecnicaMaquinasPistas[$itemdet][$item]."', ".
                                        "'".$this->profundidadFichaTecnicaMaquinasPistas[$itemdet][$item]."', ".
                                        "'".$this->puntosFichaTecnicaMaquinasPistas[$itemdet][$item]."', ".
                                        "'".$this->metroRevolucionFichaTecnicaMaquinasPistas[$itemdet][$item]."', ".
                                        "'".$this->longMallaIzquierdoFichaTecnicaMaquinasPistas[$itemdet][$item]."', ".
                                        "'".$this->nonioVueltasFichaTecnicaMaquinasPistas[$itemdet][$item]."', ".
                                        "'".$this->nonioNumeroFichaTecnicaMaquinasPistas[$itemdet][$item]."', ".
                                        "'".$this->tensionHiloFichaTecnicaMaquinasPistas[$itemdet][$item]."', ".
                                        "'".$this->descripcionFichaTecnicaMaquinasPistas[$itemdet][$item]."'); "; 
		//echo $sql.'<br>';
                $bd = Db::getInstance();
                $query = $bd->ejecutar($sql); 
                return $query;
        } 
		
        
        
        //	ADICION DE tintoreria	
	function AdicionarFichaTecnicaTintoreria($id, $item) 
        { 

                    $sql="insert into FichaTecnicaTintoreria(
                                            idFichaTecnicaTintoreria,
                                            FichaTecnica_idFichaTecnica,
                                            nombreFichaTecnicaTintoreria,
                                            cantidadFichaTecnicaTintoreria)".
                                     " values (".$this->idFichaTecnicaTintoreria[$item].", ".
                                                    "'".$id."', ".
                                                    "'".$this->nombreFichaTecnicaTintoreria[$item]."', ".                           
                                                    "'".$this->cantidadFichaTecnicaTintoreria[$item]."'); "; 
                    //echo '<br>'.$sql;

                    $bd = Db::getInstance();
                    $query = $bd->ejecutar($sql); 
                    return $query;
        } 
        
//	ADICION DE Hilaza
	function AdicionarFichaTecnicaHilaza($id, $item) 
        { 

                    $sql="INSERT INTO FichaTecnicaHilaza(idFichaTecnicaHilaza, 
                                        FichaTecnica_idFichaTecnica, 
                                        numeroHiloFichaTecnicaHilaza, 
                                        pesoInicialFichaTecnicaHilaza, 
                                        pesoFinalFichaTecnicaHilaza, 
                                        alimentadoresFichaTecnicaHilaza, 
                                        totalHiloFichaTecnicaHilaza, 
                                        consumoHiloFichaTecnicaHilaza, 
                                        CalibreHilo_idHilaza, 
                                        nombreComposicionHilaza, 
                                        tipoHiloFichaTecnicaHilaza, 
                                        Tercero_idProveedorHilo, 
                                        Producto_idProducto)
                                     values (".$this->idFichaTecnicaHilaza[$item].", ".
                                                "'".$id."', ".
                                                "'".$this->numeroHiloFichaTecnicaHilaza[$item]."', ".
                                                "'".$this->pesoInicialFichaTecnicaHilaza[$item]."', ".                            
                                                "'".$this->pesoFinalFichaTecnicaHilaza[$item]."', ".                            
                                                "'".$this->alimentadoresFichaTecnicaHilaza[$item]."', ".                            
                                                "'".$this->totalHiloFichaTecnicaHilaza[$item]."', ".                            
                                                "'".$this->consumoHiloFichaTecnicaHilaza[$item]."', ".                            
                                                "'','', '','', ". 
                                                "'".$this->Hilaza_idProducto[$item]."'); "; 
                  
                    
                  //  echo '<br>'.$sql;
                    //print_r( "numerode h ".$this->idFichaTecnicaHilaza[$item]);
                    //Ejecutamos la query 
                    $bd = Db::getInstance();
                    $query = $bd->ejecutar($sql); 
//
//                    $this->ConsultarIdFichaTecnicaHilazas("numeroHiloFichaTecnicaHilaza ='" .$this->numeroHiloFichaTecnicaHilaza[$item]. "' and pesoInicialFichaTecnicaHilaza ='".$this->pesoInicialFichaTecnicaHilaza[$item]."' and pesoFinalFichaTecnicaHilaza = '".$this->pesoFinalFichaTecnicaHilaza[$item].
//                                                          "' and alimentadoresFichaTecnicaHilaza = '".$this->alimentadoresFichaTecnicaHilaza[$item]."'", "");
//                    
//                    $totalcomp =(isset($this->Composicion_idComposicionHilaza[$item]) ? count($this->Composicion_idComposicionHilaza[$item]) : 0); 
//                   // echo $totalcomp;
//                    for($comp = 0; $comp < $totalcomp; $comp++)
//                    {
//                       $this->AdicionarFichaTecnicaHilazaComposicion($comp, $item);
//                    }
                    return $query;
        } 
        
        
      function AdicionarFichaTecnicaHilazaComposicion($item, $comp) 
      { 
        
          
               $sql2="insert into FichaTecnicaHilazaComposicion(
                                        idFichaTecnicaHilazaComposicion,
                                        FichaTecnica_idFichaTecnica,
                                        FichaTecnicaHilaza_idFichaTecnicaHilaza,
                                        Composicion_idComposicionHilaza,
                                        porcentajeFichaTecnicaHilazaComposicion)".
                              " values "; 
               $sql2 .= "(". $this->idFichaTecnicaHilazaComposicion[$comp][$item] . ",'" .
                            $this->idFichaTecnica. "', '" .
                            $this->idFichaTecnicaHilazasAux. "', '" .
                            $this->Composicion_idComposicionHilaza[$comp][$item]. "', '" .
                            $this->porcentajeFichaTecnicaHilazaComposicion[$comp][$item] . "'),";

                $sql2 = substr($sql2, 0, strlen($sql2) - 1) . ';';
                    
              // echo $sql2.'<br>';
                $bd = Db::getInstance();
                $query = $bd->ejecutar($sql2); 
                return $query;
        } 

        
    function EliminarFichaTecnicaHilaza($Condicion = '')
    {
        if (!empty($Condicion))
        {
            $Condicion = 'where ' . $Condicion;
        }

        $sql = "DELETE FROM FichaTecnicaHilaza " . $Condicion;
        
     //   echo $sql."<br>";
        /* Ejecutamos la query */
        $bd = Db::getInstance();
        $query = $bd->ejecutar($sql);
        return $query;
    } 
    

        
           
        function ConsultarIdFichaTecnicaHilazas($Condicion = '')
        {

              if (!empty($Condicion))
              {
                      $Condicion = ' where ' . $Condicion;
              }


              $sql = "select * from FichaTecnicaHilaza " . $Condicion;
             // echo "<br>".$sql."<br>";
              $bd = Db::getInstance();
              $query = $bd->ejecutar($sql);
              if ($query)
              {
                      /* Realizamos un bucle para ir obteniendo los resultados */
                      while ($registro = $bd->obtener_fila($query, 0))
                      {
                              $this->idFichaTecnicaHilazasAux = $registro["idFichaTecnicaHilaza"];
                      }
              }
              else
              {
                      $this->idFichaTecnicaHilazasAux = 0;
              }
                
              return $query;
          }
    
    
	//	ADICION DE variantes Pinta	
	function AdicionarFichaTecnicaColorTela($id, $item) 
        { 

                    $sql="insert into FichaTecnicaColorTela(
                                            idFichaTecnicaColorTela,
                                            FichaTecnica_idFichaTecnica,
                                            Color_idColor,
                                            codigoAcabadoFichaTecnicaColorTela, 
                                            procesoFichaTecnicaColorTela, 
                                            Tono_idTono,
                                            colorDigitadoFichaTecnicaColorTela,
                                            Tercero_idTercero, 
                                            Composicion_idFolder, 
                                            paginaFichaTecnicaColorTela)".
                                     " values (".$this->idFichaTecnicaColorTela[$item].", ".
                                                    "'".$id."', ".
                                                    "'".$this->Color_idColor[$item]."', ".
                                                    "'".$this->codigoAcabadoFichaTecnicaColorTela[$item]."', ".
                                                    "'".$this->procesoFichaTecnicaColorTela[$item]."', ".
                                                    "'".$this->Tono_idTono[$item]."', ".
                                                    "'".$this->colorDigitadoFichaTecnicaColorTela[$item]."', ".                            
                                                    "'".$this->Tercero_idTercero[$item]."', ".                            
                                                    "'".$this->Composicion_idFolder[$item]."', ".                            
                                                    "'".$this->paginaFichaTecnicaColorTela[$item]."'); "; 
                    $bd = Db::getInstance();
                    $query = $bd->ejecutar($sql); 
                    return $query;
        } 
        
		
	//	ADICION DE variantes Pinta	
	function AdicionarFichaTecnicaPinta($id, $item) 
        { 

                    $sql="insert into FichaTecnicaPinta(
                                            idFichaTecnicaPinta,
                                            FichaTecnica_idFichaTecnica,
                                            Pinta_idPinta,
                                            Predominante_idColor)".
                                     " values (".$this->idFichaTecnicaPinta[$item].",".
                                                    "'".$id."', ".
                                                    "'".$this->Pinta_idPinta[$item]."',".
                                                    "'".$this->Predominante_idColor[$item][0]."'); "; 
    		    //echo '<br>adicionar Pintas: '.$sql.'<br>';
                    $bd = Db::getInstance();
                    $query = $bd->ejecutar($sql);
                    
		   //GRABAMOS Los colores que estan dentro de cada pinta
                    $this->EliminarFichaTecnicaPintaColor("FichaTecnicaPinta_idFichaTecnicaPinta = ".$this->idFichaTecnicaPinta[$item], "") ;
                   // consultamos el id de la nueva ficha insertada para tomerlo en la grabacion de los detalles
                    $this->ConsultarIdFichaTecnicaPinta("Pinta_idPinta =".$this->Pinta_idPinta[$item]." and FichaTecnica_idFichaTecnica = ".$this->idFichaTecnica." ", ""); 
                    $n = isset($this->idFichaTecnicaPintaColor[$item]) ? count($this->idFichaTecnicaPintaColor[$item]) : 0;
                    for($i2=0; $i2<$n; $i2++)
                    {
                       $this->AdicionarFichaTecnicaPintaColor($i2, $item );
                    }

                    return $query;
        } 
        
 	//ADICION DE Pinta Color	
	function AdicionarFichaTecnicaPintaColor($item, $itemdet) 
        { 
                $sql="insert into FichaTecnicaPintaColor(
                                        idFichaTecnicaPintaColor,
                                        FichaTecnicaPinta_idFichaTecnicaPinta,
                                        Color_idPintaColor,
                                        codigoDigitadoFichaTecnicaPintaColor,
                                        pasadasFichaTecnicaPintaColor)".
                              " values (".$this->idFichaTecnicaPintaColor[$itemdet][$item].", ".
                                        "'".$this->idFichaTecnicaPintaAux."', ".
                                        "'".$this->Color_idPintaColor[$itemdet][$item]."', ".
                                        "'".$this->codigoDigitadoFichaTecnicaPintaColor[$itemdet][$item]."', ".
                                        "'".$this->pasadasFichaTecnicaPintaColor[$itemdet][$item]."'); "; 
//		echo '<br>adicionar Color Pinta: '.$sql.'<br>';
                $bd = Db::getInstance();
                $query = $bd->ejecutar($sql); 
                return $query;
        } 


	
	//	ADICION DE Datos Tecnicos	
	function AdicionarFichaTecnicaDatosTecnicos($id, $item) 
        { 

                    $sql="insert into FichaTecnicaDatosTecnicos(
                                            idFichaTecnicaDatosTecnicos,
                                            FichaTecnica_idFichaTecnica,
                                            promedioFichaTecnicaDatosTecnicos,
                                            toleranciaFichaTecnicaDatosTecnicos)".
                                     " values (".$this->idFichaTecnicaDatosTecnicos[$item].", ".
                                                    "'".$id."', ".
                                                    "'".$this->promedioFichaTecnicaDatosTecnicos[$item]."', ".
                                                    "'".$this->toleranciaFichaTecnicaDatosTecnicos[$item]."'); "; 
    //		echo $sql;

                    /*Ejecutamos la query*/ 
                    $bd = Db::getInstance();
                    $query = $bd->ejecutar($sql); 
                    //echo $query;
                    return $query;
        } 
        
        //ADICION DE Notas al modificar una ficha tecnica con estado aprobado	
        function AdicionarFichaTecnicaNotas($id, $item) 
        { 
                $sql="insert into FichaTecnicaNotas(
                                        idFichaTecnicaNotas,
                                        FichaTecnica_idFichaTecnica,
                                        fechaFichaTecnicaNotas,
                                        horaFichaTecnicaNotas, 
                                        SegLogin_idUsuario,
                                        textoFichaTecnicaNotas)".
                                " values (".$this->idFichaTecnicaNotas[$item].", ".
                                        "'".$id."', ".
                                        "'".$this->fechaFichaTecnicaNotas[$item]."', ".                           
                                        "'".$this->horaFichaTecnicaNotas[$item]."', ".                           
                                        "'".$this->SegLogin_idUsuario[$item]."', ".                           
                                        "'".$this->textoFichaTecnicaNotas[$item]."'); "; 
           // echo '<br>'.$sql;

                $bd = Db::getInstance();
                $query = $bd->ejecutar($sql); 
                return $query;
        } 
	
	//	ADICION DE COLORES	
	function AdicionarFichaTecnicaColor($id, $item) 
        { 

                    $sql="insert into FichaTecnicaColor(FichaTecnica_idFichaTecnica,
                                            idFichaTecnicaColor,
                                            Color_idColor,
                                            codigoColorClienteFichaTecnicaColor,
                                            nombreEspecialFichaTecnicaColor,
                                            cantidadFichaTecnicaColor)".
                                     " values (".$id.", ".
                                                    "'".$this->idFichaTecnicaColor[$item]."', ".
                                                    "'".$this->Color_idColor[$item]."', ".
                                                    "'".$this->codigoColorClienteFichaTecnicaColor[$item]."', ".
                                                    "'".$this->nombreEspecialFichaTecnicaColor[$item]."', ".
                                                    "'".$this->cantidadFichaTecnicaColor[$item]."'); "; 
    		//echo $sql;

                    /*Ejecutamos la query*/ 
                    $bd = Db::getInstance();
                    $query = $bd->ejecutar($sql); 
                    //echo $query;
                    return $query;
        } // fin de operacion AdicionarCaracteristica 

        
        
        

        
        function EliminarFichaTecnicaTintoreria($Condicion='') 
        { 
                    if(!empty($Condicion))
                    {
                            $Condicion = 'where '. $Condicion;
                    }

                    /*Creamos una query sencilla*/ 
                    $sql = "delete from FichaTecnicaTintoreria ". $Condicion; 

                    $bd = Db::getInstance();
                    $query = $bd->ejecutar($sql); 
                    return $query;
        } 
        
//        function EliminarFichaTecnicaHilaza($Condicion='') 
//        { 
//                    if(!empty($Condicion))
//                    {
//                            $Condicion = 'where '. $Condicion;
//                    }
//
//                    /*Creamos una query sencilla*/ 
//                    $sql = "delete from FichaTecnicaHilaza ". $Condicion; 
//
//                    $bd = Db::getInstance();
//                    $query = $bd->ejecutar($sql); 
//                    return $query;
//        } 
        
        function EliminarFichaTecnicaColorTela($Condicion='') 
        { 

                    if(!empty($Condicion))
                    {
                            $Condicion = 'where '. $Condicion;
                    }

                    /*Creamos una query sencilla*/ 
                    $sql = "delete 
                                    from FichaTecnicaColorTela ". $Condicion; 

                    $bd = Db::getInstance();
                    $query = $bd->ejecutar($sql); 
                    return $query;
        } 
        
        function EliminarFichaTecnicaPinta($Condicion='') 
        { 

                    if(!empty($Condicion))
                    {
                            $Condicion = 'where '. $Condicion;
                    }

                    /*Creamos una query sencilla*/ 
                    $sql = "delete 
                                    from FichaTecnicaPinta ". $Condicion; 
//                    echo '<br>Eliminar Fichapinta: '.$sql.'<br>';
                    $bd = Db::getInstance();
                    $query = $bd->ejecutar($sql); 
                    return $query;
        } 
        function EliminarFichaTecnicaPintaColor($Condicion='') 
        { 

                    if(!empty($Condicion))
                    {
                            $Condicion = 'where '. $Condicion;
                    }

                    /*Creamos una query sencilla*/ 
                    $sql = "delete from FichaTecnicaPintaColor ". $Condicion; 
//                    echo '<br>Eliminar FichapintaColor: '.$sql.'<br>';
                    $bd = Db::getInstance();
                    $query = $bd->ejecutar($sql); 
                    return $query;
        } 
        
        function EliminarFichaTecnicaNotas($Condicion='') 
        { 

                    if(!empty($Condicion))
                    {
                            $Condicion = 'where '. $Condicion;
                    }

                    /*Creamos una query sencilla*/ 
                    $sql = "delete 
                                    from FichaTecnicaNotas ". $Condicion; 

                    $bd = Db::getInstance();
                    $query = $bd->ejecutar($sql); 
                    return $query;
        } 
        
        function EliminarFichaTecnicaMaquinas($Condicion='') 
        { 

                    if(!empty($Condicion))
                    {
                            $Condicion = 'where '. $Condicion;
                    }

                    /*Creamos una query sencilla*/ 
                    $sql = "delete from FichaTecnicaMaquinas ". $Condicion; 
               //     echo "<br>".$sql."<br>";
                    $bd = Db::getInstance();
                    $query = $bd->ejecutar($sql); 
                    return $query;
        } 
        
        function EliminarFichaTecnicaMaquinasPistas($Condicion='') 
        { 

                    if(!empty($Condicion))
                    {
                            $Condicion = 'where '. $Condicion;
                    }

                    /*Creamos una query sencilla*/ 
                    $sql = "delete from FichaTecnicaMaquinasPistas ". $Condicion; 
                    //echo $sql.'<br>';
                    $bd = Db::getInstance();
                    $query = $bd->ejecutar($sql); 
                    return $query;
        } 
        

        function EliminarFichaTecnicaDatosTecnicos($Condicion='') 
        { 

                    if(!empty($Condicion))
                    {
                            $Condicion = 'where '. $Condicion;
                    }

                    /*Creamos una query sencilla*/ 
                    $sql = "delete 
                                    from FichaTecnicaDatosTecnicos ". $Condicion; 

                    /*Ejecutamos la query*/ 

                    $bd = Db::getInstance();
                    $query = $bd->ejecutar($sql); 
                    return $query;
        } 

        
        
        

	/*
		ELIMINACION DE COLORES
	*/
    function EliminarFichaTecnicaColor($Condicion='') 
    { 

		if(!empty($Condicion))
		{
			$Condicion = 'where '. $Condicion;
		}
		
		/*Creamos una query sencilla*/ 
		$sql = "delete 
				from FichaTecnicaColor ". $Condicion; 

		/*Ejecutamos la query*/ 
		
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
		return $query;
    } 

	/*
		ADICION DE TALLAS
	*/
	function AdicionarFichaTecnicaTalla($id, $item) 
    { 

		$sql="insert into FichaTecnicaTalla(FichaTecnica_idFichaTecnica,
					idFichaTecnicaTalla,
					Talla_idTalla,
					codigoTallaClienteFichaTecnicaTalla,
					BaseMedidaFichaTecnicaTalla,
					curvaFichaTecnicaTalla)".
				 " values (".$id.", ".
						  "'".$this->idFichaTecnicaTalla[$item]."', ".
						  "'".$this->Talla_idTalla[$item]."', ".
						  "'".$this->codigoTallaClienteFichaTecnicaTalla[$item]."',".
						  "'".$this->BaseMedidaFichaTecnicaTalla[$item]."',".
						  "'".$this->curvaFichaTecnicaTalla[$item]."'); "; 
		
		//echo $sql;
		/*Ejecutamos la query*/ 
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
		//echo $query;
		return $query;
    } // fin de operacion AdicionarCaracteristica 
	
	
	/*
		ADICION DE TALLAS COMPLEMENTO
	*/
	function AdicionarFichaTecnicaTallaComplemento() 
    { 

		$totinsert = isset($this->idFichaTecnicaTallaComplemento[0]) ? count($this->idFichaTecnicaTallaComplemento) : 0;
		
		$sql = "insert into FichaTecnicaTallaComplemento(FichaTecnica_idFichaTecnica,
														idFichaTecnicaTallaComplemento,
														TallaComplemento_idTallaComplemento,
														codigoTallaClienteFichaTecnicaTallaComplemento)
												values ";
		
		for($item = 0; $item < $totinsert; $item++)
		{
					$sql .=	" (".$this->idFichaTecnica.", ".
								$this->idFichaTecnicaTallaComplemento[$item].",".
								$this->TallaComplemento_idTallaComplemento[$item].", '".
								$this->codigoTallaClienteFichaTecnicaTallaComplemento[$item]."') ".
							(($item != ($totinsert-1)) ? ',' : ';');
		
		} 
		
		if($totinsert > 0)
		{
			$bd = Db::getInstance();
			$query = $bd->ejecutar($sql);
			return $query;
		}
		//echo $query;
		
    } // fin de operacion AdicionarCaracteristica 
    
    function AdicionarFichaTecnicaMaterialAdicional($id, $item) 
    { 

            $sql = "insert into FichaTecnicaMaterialAdicional(
                                                    idFichaTecnicaMaterialAdicional,
                                                    FichaTecnica_idFichaTecnica,
                                                    nombreFichaTecnicaMaterialAdicional,
                                                    consumoFichaTecnicaMaterialAdicional,
                                                    costoUnitarioFichaTecnicaMaterialAdicional)
                                            values  (".$this->idFichaTecnicaMaterialAdicional[$item].", ".
                                                       $id.",'".
                                                       $this->nombreFichaTecnicaMaterialAdicional[$item]."','".
                                                       $this->consumoFichaTecnicaMaterialAdicional[$item]."', '".
                                                       $this->costoUnitarioFichaTecnicaMaterialAdicional[$item]."') "; 

            /*Ejecutamos la query*/
         //   echo '<br><br><br>'.$sql;
            $bd = Db::getInstance();
            $query = $bd->ejecutar($sql); 
            return $query;

    }
    
    function EliminarFichaTecnicaMaterialAdicional($Condicion='') 
    { 

		if(!empty($Condicion))
		{
			$Condicion = 'where '. $Condicion;
		}
		
		/*Creamos una query sencilla*/ 
		$sql = "delete from FichaTecnicaMaterialAdicional ". $Condicion; 

//		echo $sql;
		/*Ejecutamos la query*/ 
		
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
		return $query;
    } 

    
    function EliminarFichaTecnicaTalla($Condicion='') 
    { 

		if(!empty($Condicion))
		{
			$Condicion = 'where '. $Condicion;
		}
		
		/*Creamos una query sencilla*/ 
		$sql = "delete from FichaTecnicaTalla ". $Condicion; 

		/*Ejecutamos la query*/ 
		
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
		return $query;
    } 
	
	/*
		ELIMINACION DE TALLAS COMPLEMENTOS
	*/
    function EliminarFichaTecnicaTallaComplemento($Condicion='') 
    { 

		if(!empty($Condicion))
		{
			$Condicion = 'where '. $Condicion;
		}
		
		/*Creamos una query sencilla*/ 
		$sql = "delete from FichaTecnicaTallaComplemento ". $Condicion; 

		/*Ejecutamos la query*/ 
		
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
		return $query;
    } 



	/*
		ADICION DE IMAGENES
	*/
	function AdicionarFichaTecnicaImagen($id, $item) 
    { 

		$sql="insert into FichaTecnicaImagen(FichaTecnica_idFichaTecnica,
					idFichaTecnicaImagen,
					codigoAlternoFichaTecnicaImagen,
					nombreFichaTecnicaImagen,
					imagenFichaTecnicaImagen,
					observacionFichaTecnicaImagen)".
				 " values (".$id.", ".
						  "'".$this->idFichaTecnicaImagen[$item]."', ".
						  "'".$this->codigoAlternoFichaTecnicaImagen[$item]."', ".
						  "'".$this->nombreFichaTecnicaImagen[$item]."', ".
						  "'".$this->imagenFichaTecnicaImagen[$item]."', ".
						  "'".$this->observacionFichaTecnicaImagen[$item]."'); "; 
		
		/*Ejecutamos la query*/ 
		//echo('ingresa adicionar imagen');
		//echo $sql;
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
		return $query;
    } // fin de operacion AdicionarCaracteristica 


	/*
		ELIMINACION DE IMAGENES
	*/
    function EliminarFichaTecnicaImagen($Condicion='') 
    { 

		if(!empty($Condicion))
		{
			$Condicion = 'where '. $Condicion;
		}
		
		/*Creamos una query sencilla*/ 
		$sql = "delete 
				from FichaTecnicaImagen ". $Condicion; 

		/*Ejecutamos la query*/ 
		
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
		return $query;
    } 
	
	
	
	/*
		ADICION DE PIEZAS
	*/
	function AdicionarFichaTecnicaPieza($id, $item) 
    { 

		$sql="insert into FichaTecnicaPieza(FichaTecnica_idFichaTecnica,
					idFichaTecnicaPieza,
					codigoAlternoFichaTecnicaPieza,
					nombreFichaTecnicaPieza,
					imagenFichaTecnicaPieza,
					observacionFichaTecnicaPieza)".
				 " values (".$id.", ".
						  "'".$this->idFichaTecnicaPieza[$item]."', ".
						  "'".$this->codigoAlternoFichaTecnicaPieza[$item]."', ".
						  "'".$this->nombreFichaTecnicaPieza[$item]."', ".
						  "'".$this->imagenFichaTecnicaPieza[$item]."', ".
						  "'".$this->observacionFichaTecnicaPieza[$item]."'); "; 
		
		/*Ejecutamos la query*/ 
		//echo $sql;
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
		//echo $query;		
		return $query;
    } // fin de operacion AdicionarCaracteristica 


	/*
		ELIMINACION DE PIEZAS
	*/
    function EliminarFichaTecnicaPieza($Condicion='') 
    { 

		if(!empty($Condicion))
		{
			$Condicion = 'where '. $Condicion;
		}
		
		/*Creamos una query sencilla*/ 
		$sql = "delete 
				from FichaTecnicaPieza ". $Condicion; 

		/*Ejecutamos la query*/ 
		
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
		return $query;
    } 
	
	
	
	/*
		ADICION DE DETALLES DE CONSTRUCCION
	*/
    function AdicionarFichaTecnicaConstruccion($id, $item) 
    { 

		$sql="insert into FichaTecnicaConstruccion(FichaTecnica_idFichaTecnica,
					idFichaTecnicaConstruccion,
					codigoAlternoFichaTecnicaConstruccion,
					nombreFichaTecnicaConstruccion,
					imagenFichaTecnicaConstruccion,
					observacionFichaTecnicaConstruccion)".
				 " values (".$id.", ".
						  "'".$this->idFichaTecnicaConstruccion[$item]."', ".
						  "'".$this->codigoAlternoFichaTecnicaConstruccion[$item]."', ".
						  "'".$this->nombreFichaTecnicaConstruccion[$item]."', ".
						  "'".$this->imagenFichaTecnicaConstruccion[$item]."', ".
						  "'".$this->observacionFichaTecnicaConstruccion[$item]."'); "; 
		
		/*Ejecutamos la query*/ 
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
		//echo $query;
		return $query;
    } // fin de operacion AdicionarCaracteristica 


	/*
		ELIMINACION DE DETALLES DE CONSTRUCCION
	*/
    function EliminarFichaTecnicaConstruccion($Condicion='') 
    { 

		if(!empty($Condicion))
		{
			$Condicion = 'where '. $Condicion;
		}
		
		/*Creamos una query sencilla*/ 
		$sql = "delete 
				from FichaTecnicaConstruccion ". $Condicion; 

		/*Ejecutamos la query*/ 
		
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
		return $query;
    } 
	

	/*
		ADICION DE ESPECIFICACIONES
	*/
    function AdicionarFichaTecnicaEspecificacion($id, $item) 
    { 

		$sql="insert into FichaTecnicaEspecificacion(
							FichaTecnica_idFichaTecnica,
							idFichaTecnicaEspecificacion,
							nombreFichaTecnicaEspecificacion,
							especificacionFichaTecnicaEspecificacion,
							observacionFichaTecnicaEspecificacion)".
				 " values (".$id.", ".
						  "'".$this->idFichaTecnicaEspecificacion[$item]."', ".
						  "'".$this->nombreFichaTecnicaEspecificacion[$item]."', ".
						  "'".$this->especificacionFichaTecnicaEspecificacion[$item]."', ".
						  "'".$this->observacionFichaTecnicaEspecificacion[$item]."'); "; 
		
		/*Ejecutamos la query*/ 
           //     echo "<br>".$sql."<br>";
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
		//echo $query;
		return $query;
    } // fin de operacion AdicionarCaracteristica 


	/*
		ELIMINACION DE CENTROS DE PRODUCCION
	*/
    function EliminarFichaTecnicaEspecificacion($Condicion='') 
    { 

		if(!empty($Condicion))
		{
			$Condicion = 'where '. $Condicion;
		}
		
		/*Creamos una query sencilla*/ 
		$sql = "delete 
				from FichaTecnicaEspecificacion ". $Condicion; 

		/*Ejecutamos la query*/ 
		
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
		return $query;
    } 
	
	
	/*
		ADICION DE COMPONENTES
	*/
	function AdicionarFichaTecnicaComponente($id, $item) 
    { 

		$sql="insert into FichaTecnicaComponente(
							FichaTecnica_idFichaTecnica,
							idFichaTecnicaComponente,
							componenteFichaTecnicaComponente,
							ComponenteFichaTecnica_idComponenteFichaTecnica,
							tipoFichaTecnicaComponente,
							tejidoFichaTecnicaComponente,
							pesoFichaTecnicaComponente,
							imagenFichaTecnicaComponente,
							composicionFichaTecnicaComponente)".
				 " values (".$id.", ".
						  "'".$this->idFichaTecnicaComponente[$item]."', ".
						  "'".$this->componenteFichaTecnicaComponente[$item]."', ".
						  "'".$this->ComponenteFichaTecnica_idComponenteFichaTecnica[$item]."', ".
						  "'".$this->tipoFichaTecnicaComponente[$item]."', ".
						  "'".$this->tejidoFichaTecnicaComponente[$item]."', ".
						  "'".$this->pesoFichaTecnicaComponente[$item]."', ".
						  "'".$this->imagenFichaTecnicaComponente[$item]."', ".
						  "'".$this->composicionFichaTecnicaComponente[$item]."'); "; 
		
		
		//Ejecutamos la query*/ 
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
		//echo $sql;
		return $query;
    } // fin de operacion AdicionarCaracteristica 


	/*
		ELIMINACION DE COMPONENTES
	*/
    function EliminarFichaTecnicaComponente($Condicion='') 
    { 

		if(!empty($Condicion))
		{
			$Condicion = 'where '. $Condicion;
		}
		
		/*Creamos una query sencilla*/ 
		$sql = "delete 
				from FichaTecnicaComponente ". $Condicion; 

		/*Ejecutamos la query*/ 
		
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
		return $query;
    } 
	
	
	/*
		ADICION DE MATERIALES DE EMPAQUE
	*/
	function AdicionarFichaTecnicaEmpaque($id, $item) 
    { 

		$sql="insert into FichaTecnicaEmpaque(
							FichaTecnica_idFichaTecnica,
							idFichaTecnicaEmpaque,
							materialFichaTecnicaEmpaque,
							valorFichaTecnicaEmpaque,
							observacionFichaTecnicaEmpaque)".
				 " values (".$id.", ".
						  "'".$this->idFichaTecnicaEmpaque[$item]."', ".
						  "'".$this->materialFichaTecnicaEmpaque[$item]."', ".
						  "'".$this->valorFichaTecnicaEmpaque[$item]."', ".
						  "'".$this->observacionFichaTecnicaEmpaque[$item]."'); "; 
		
		//Ejecutamos la query*/ 
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
		//echo $sql;
		return $query;
    } // fin de operacion AdicionarCaracteristica 


	/*
		ELIMINACION DE MATERIALES DE EMPAQUE
	*/
    function EliminarFichaTecnicaEmpaque($Condicion='') 
    { 

		if(!empty($Condicion))
		{
			$Condicion = 'where '. $Condicion;
		}
		
		/*Creamos una query sencilla*/ 
		$sql = "delete 
				from FichaTecnicaEmpaque ". $Condicion; 

		/*Ejecutamos la query*/ 
		
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
		return $query;
    } 
	
	
	/*
		ADICION DE MATERIALES
	*/
	function AdicionarFichaTecnicaMaterial($id, $item) 
    { 
		$sql="insert into FichaTecnicaMaterial(FichaTecnica_idFichaTecnica,
					idFichaTecnicaMaterial,
					CentroProduccion_idCentroProduccion,
					Producto_idMaterial, 
					noAfectaCostoMaterial, 
					Color_idColorMaterial,
					Talla_idTallaMaterial,
					TallaComplemento_idTallaComplementoMaterial,
					tipoProductoMaterial, 
					porcentajeDesperdicioMaterial,
					consumoMaterialProductoMaterial,					
					consumoMaterialConversionProductoMaterial,					
					consumoProductoProductoMaterial, 
					ParteMedida_idParteMedida,
					observacionProductoMaterial,
                    imagenFichaTecnicaMaterial)".
				 " values (".$id.", ".
						  "".$this->idFichaTecnicaMaterial[$item].", ".
						  "".$this->CentroProduccion_idCentroProduccion[$item].", ".
						  "".$this->Producto_idMaterial[$item].", ".
						  "".$this->noAfectaCostoMaterial[$item].", ".
						  "'".$this->Color_idColorMaterial[$item]."', ".
						  "'".$this->Talla_idTallaMaterial[$item]."', ".
						  "'".$this->TallaComplemento_idTallaComplementoMaterial[$item]."', ".
						  "'".$this->tipoProductoMaterial[$item]."', ".
						  "'".str_replace(",", ".",$this->porcentajeDesperdicioMaterial[$item])."', ".
						  "'".str_replace(",", ".",$this->consumoMaterialProductoMaterial[$item])."', ".
						  "'".$this->consumoMaterialConversionProductoMaterial[$item]."', ".
						  "'".str_replace(",", ".",$this->consumoProductoProductoMaterial[$item])."', ".
						  "'".$this->ParteMedida_idParteMedida[$item]."', ".
						  "'".$this->observacionProductoMaterial[$item]."', ".
                          "'".$this->imagenFichaTecnicaMaterial[$item]."'); "; 
		
		/*Ejecutamos la query*/
		//echo '<br><br><br>'.$sql;
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
		return $query;
    } // fin de operacion AdicionarCaracteristica 


	/*
		ELIMINACION DE MATERIALES
	*/
    function EliminarFichaTecnicaMaterial($Condicion='') 
    { 

		if(!empty($Condicion))
		{
			$Condicion = 'where '. $Condicion;
		}
		
		/*Creamos una query sencilla*/ 
		$sql = "delete 
				from FichaTecnicaMaterial ". $Condicion; 

		//echo '<br><br><br>'.$sql;
		/*Ejecutamos la query*/ 
		
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
		return $query;
    } 
	

	/*
		ADICION DE COMBINACIONES
	*/
	function AdicionarFichaTecnicaCombinacion($id, $item) 
    { 
		/*
			GRABAMOS LAS MEDIDAS POR TALLA
		*/
		$total = count($this->Color_idBase[$item]);		
		for($i=0; $i < $total; $i++)
		{

			$sql="insert into FichaTecnicaCombinacion(
					FichaTecnica_idFichaTecnica,
					idFichaTecnicaCombinacion,
					nombreFichaTecnicaCombinacion,
					Color_idBase,
					Color_idCombinacion)".
			" values (".$id.", ".
					  $this->idFichaTecnicaCombinacion[$item][$i].", ".
					  "'".$this->nombreFichaTecnicaCombinacion[$item]."', ".
					  "'".$this->Color_idBase[$item][$i]."', ".
					  "'".$this->Color_idCombinacion[$item][$i]."'); ";
			
			/*Ejecutamos la query*/ 
			//echo"<br>".$sql."<br>";
			$bd = Db::getInstance();
			$query = $bd->ejecutar($sql); 

		}
		
		
		return $query;
    } // fin de operacion AdicionarCaracteristica 



	/*
		ELIMINACION DE MEDIDAS
	*/
    function EliminarFichaTecnicaCombinacion($Condicion='') 
    { 

		if(!empty($Condicion))
		{
			$Condicion = 'where '. $Condicion;
		}
		
		/*Creamos una query sencilla*/ 
		$sql = "delete 
				from FichaTecnicaCombinacion ". $Condicion; 

		/*Ejecutamos la query*/ 
		
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
		return $query;
    } 
	
	

	/*
		ADICION DE MEDIDAS
	*/
	function AdicionarFichaTecnicaMedida($id, $item) 
    { 

		$sql="insert into FichaTecnicaMedida(
					FichaTecnica_idFichaTecnica,
					idFichaTecnicaMedida,
					tipoFichaTecnicaMedida,
					ParteMedida_idParteMedida,
					observacionFichaTecnicaMedida,
					codigoFichaTecnicaMedidaTalla,
					toleranciaFichaTecnicaMedida,
					escalaFichaTecnicaMedida)".
			" values (".$id.", ".
					  "'".$this->idFichaTecnicaMedida[$item]."', ".
					  "'".$this->tipoFichaTecnicaMedida[$item]."', ".
					  "'".$this->ParteMedida_idParteMedidaMed[$item]."', ".
					  "'".$this->observacionFichaTecnicaMedida[$item]."', ".
					  "'".$this->codigoFichaTecnicaMedidaTalla[$item]."', ".
					  "'".$this->toleranciaFichaTecnicaMedida[$item]."', ".
					  "'".$this->escalaFichaTecnicaMedida[$item]."'); "; 
		
		/*Ejecutamos la query*/ 
		//echo $sql."<br>";
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
		
		// luego de que insertamos el registro de la medida (cada renglon de Parte a medir), 
		// por este debemos insertar varios registros en la tabla de FichaTecnicaMedidaTalla
		$idParteMedida = $this->consultarIdFichaTecnicaMedida("FichaTecnica_idFichaTecnica = " . $id . " and
					tipoFichaTecnicaMedida = " . $this->tipoFichaTecnicaMedida[$item] . " and 
					ParteMedida_idParteMedida = " . $this->ParteMedida_idParteMedidaMed[$item] . " and 
					toleranciaFichaTecnicaMedida = " . $this->toleranciaFichaTecnicaMedida[$item] . " and 
					escalaFichaTecnicaMedida = " . $this->escalaFichaTecnicaMedida[$item]);
		
		//echo $idMedida."<br>";
		/*
			GRABAMOS LAS MEDIDAS POR TALLA
		*/
		$total = count($this->Talla_idTallaMed);
              //  print_r($this->idFichaTecnicaMedidaTalla) ;
		for($i=0; $i < $total; $i++)
		{
			$this->AdicionarFichaTecnicaMedidaTalla($this->idFichaTecnica, $this->ParteMedida_idParteMedidaMed[$item], $idParteMedida, $i, $this->tipoFichaTecnicaMedida[$item]);
		}
		
		return $query;
    } // fin de operacion AdicionarCaracteristica 


	function consultarIdFichaTecnicaMedida($Condicion = '',$orden = '' ) 
    { 
		if(!empty($Condicion))
		{
			$Condicion = ' where '. $Condicion;
		}
		
		if(!empty($orden))
		{
			$orden = ' order by '. $orden;
		}
		
		
		/*Creamos una query sencilla*/ 
		$sql = "select * 
				from FichaTecnicaMedida ".$Condicion. $orden;
		
		//echo "<br>".$sql."<br>";		 
		/*Ejecutamos la query*/ 
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
		
		if ($query)
		{
			/*Realizamos un bucle para ir obteniendo los resultados */
			while ($registro = $bd->obtener_fila($query,0))
			{ 
				$idMedida = $registro['idFichaTecnicaMedida'];
			}
		}
		else
		{
			$idMedida = 0;		
		}
		return $idMedida; 
	}
	
	/*
		ELIMINACION DE MEDIDAS
	*/
    function EliminarFichaTecnicaMedida($Condicion='') 
    { 

		if(!empty($Condicion))
		{
			$Condicion = 'where '. $Condicion;
		}
		
		/*Creamos una query sencilla*/ 
		$sql = "delete 
				from FichaTecnicaMedida ". $Condicion; 

		/*Ejecutamos la query*/ 
		//echo $sql;
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
		return $query;
    } 

	/*
		ADICION DE MEDIDAS POR TALLA
	*/
	function AdicionarFichaTecnicaMedidaTalla($id, $registro, $idMedida, $item, $tabla) 
    { 
		
		//adicionamos solo los registros que pertenezcan al idMedida y al tipo de tabla enviado
		//echo $this->idMedida[$item] .'=='. $registro;
		if($this->idMedida[$item] == $registro and $this->tipoMedida[$item] == $tabla)
		{
			$sql="insert into FichaTecnicaMedidaTalla(
						FichaTecnica_idFichaTecnica,
						FichaTecnicaMedida_idFichaTecnicaMedida,
						idFichaTecnicaMedidaTalla,
						Talla_idTalla,
						valorFichaTecnicaMedidaTalla)".
				" values (".$id.", ".
					    $idMedida.", ".
                                            $this->idFichaTecnicaMedidaTalla[$item].", ".
                                        "'".$this->Talla_idTallaMed[$item]."', ".
                                        "'".$this->valorFichaTecnicaMedidaTalla[$item]."'); "; 
	
			
			/*Ejecutamos la query*/ 
			//echo $sql."<br>";		
			$bd = Db::getInstance();
			$query = $bd->ejecutar($sql); 
			return $query;
		}
		
    } // fin de operacion AdicionarMedidaTalla


	/*
		ELIMINACION DE MEDIDAS POR TALLA
	*/
    function EliminarFichaTecnicaMedidaTalla($Condicion='') 
    { 

		if(!empty($Condicion))
		{
			$Condicion = 'where '. $Condicion;
		}
		
		/*Creamos una query sencilla*/ 
		$sql = "delete 
				from FichaTecnicaMedidaTalla ". $Condicion; 

		/*Ejecutamos la query*/ 
		
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
		return $query;
    } 
	
	
	
	/*
		ADICION DE ARCHIVOS ADJUNTOS
	*/
	function AdicionarFichaTecnicaAdjunto($id, $item) 
    { 

		$sql="insert into FichaTecnicaAdjunto(FichaTecnica_idFichaTecnica,
					idFichaTecnicaAdjunto,
					codigoAlternoFichaTecnicaAdjunto,
					versionFichaTecnicaAdjunto,
					fechaFichaTecnicaAdjunto,
					nombreFichaTecnicaAdjunto,
					archivoFichaTecnicaAdjunto,
					observacionFichaTecnicaAdjunto)".
				 " values (".$id.", ".
						  "'".$this->idFichaTecnicaAdjunto[$item]."', ".
						  "'".$this->codigoAlternoFichaTecnicaAdjunto[$item]."', ".
						  "'".$this->versionFichaTecnicaAdjunto[$item]."', ".
						  "'".$this->fechaFichaTecnicaAdjunto[$item]."', ".
						  "'".$this->nombreFichaTecnicaAdjunto[$item]."', ".
						  "'".$this->archivoFichaTecnicaAdjunto[$item]."', ".
						  "'".$this->observacionFichaTecnicaAdjunto[$item]."'); "; 
		
		/*Ejecutamos la query*/ 
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
		//echo $query;
		return $query;
    } // fin de operacion AdicionarCaracteristica 


	/*
		ELIMINACION DE ARCHIVOS ADJUNTOS
	*/
    function EliminarFichaTecnicaAdjunto($Condicion='') 
    { 

		if(!empty($Condicion))
		{
			$Condicion = 'where '. $Condicion;
		}
		
		/*Creamos una query sencilla*/ 
		$sql = "delete 
				from FichaTecnicaAdjunto ". $Condicion; 

		/*Ejecutamos la query*/ 
		
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
		return $query;
    } 

	/*
		ADICION DE CENTROS DE PRODUCCION
	*/
	function AdicionarFichaTecnicaCentroProduccion($id, $item) 
    { 

		$sql="insert into FichaTecnicaCentroProduccion(
							FichaTecnica_idFichaTecnica,
							afectaMaterialFichaTecnicaCentroProduccion,
							afectaListaOperacionFichaTecnicaCentroProduccion,
							ordenFichaTecnicaCentroProduccion,
							idFichaTecnicaCentroProduccion,
							CentroProduccion_idCentroProduccion,
                                                        Tercero_idProveedorPorDefecto,
                                                        perdidaTintoreriaFichaTecnicaCentroProduccion,
							costoEstimadoFichaTecnicaCentroProduccion,
							observacionFichaTecnicaCentroProduccion)".
				 " values (".$id.", ".
						  "'".$this->afectaMaterialFichaTecnicaCentroProduccion[$item]."', ".
						  "'".$this->afectaListaOperacionFichaTecnicaCentroProduccion[$item]."', ".
						  "'".$this->ordenFichaTecnicaCentroProduccion[$item]."', ".
						  "'".$this->idFichaTecnicaCentroProduccion[$item]."', ".
						  "'".$this->CentroProduccion_idCentroProduccion_2[$item]."', ".
						  "'".$this->Tercero_idProveedorPorDefecto[$item]."', ".
						  "'".$this->perdidaTintoreriaFichaTecnicaCentroProduccion[$item]."', ".
						  "'".$this->costoEstimadoFichaTecnicaCentroProduccion[$item]."', ".
						  "'".$this->observacionFichaTecnicaCentroProduccion[$item]."'); "; 
		
		/*Ejecutamos la query*/ 
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
		//echo $query;
		return $query;
    } // fin de operacion AdicionarCaracteristica 


	/*
		ELIMINACION DE CENTROS DE PRODUCCION
	*/
    function EliminarFichaTecnicaCentroProduccion($Condicion='') 
    { 

		if(!empty($Condicion))
		{
			$Condicion = 'where '. $Condicion;
		}
		
		/*Creamos una query sencilla*/ 
		$sql = "delete 
				from FichaTecnicaCentroProduccion ". $Condicion; 

		/*Ejecutamos la query*/ 
		
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
		return $query;
    } 
	
	
//	function AprobarFichaTecnica($idFichaTecnica,$tipoFicha)
//	{		
//            // parametros:
//            // $idFichaTecnica : id de la ficha tecnica a aprobar
//            // Errores devueltos:
//            // -1 : la ficha tecnica no existe
//            // -2 : La ficha Tecnica no tiene asociado un esquema de aprobacion	        
//        
//            set_time_limit(0);
//		
//            // instanciamos la clase Producto
//            require_once('../clases/producto.class.php');
//            $producto = new Producto();
//            require_once 'codigobarras.class.php';		
//            $codigobarras = new CodigoBarras();
//
//            // consultamos la vista de la ficha tecnica enviada por parametro
//            $datoficha = $this->ConsultarVistaFichaTecnicaGeneral("idFichaTecnica = $idFichaTecnica");		             		                 
//           //   echo 'entro b1';
//            if($this->estadoFichaTecnica == 'PROTOTIPO')
//            {
//                    return -1;
//            }
//            else
//            {
//		// si la ficha no existe, devolvemos error
//               // echo 'entro b2';
//                    if(!isset($datoficha[0]["idFichaTecnica"]))
//			return -1;
//			
//		//echo $datoficha[0]["nombreEsquemaProducto"];
//		// si no tiene lleno el esquema de aprobaciÃ³n , retornamos un error
//		if(!isset($datoficha[0]["EsquemaProducto_idEsquemaProducto"]) or $datoficha[0]["EsquemaProducto_idEsquemaProducto"] == 0 or $datoficha[0]["nombreEsquemaProducto"] == NULL)
//			return -2;
//                
//                
//        	  /*Incluimos el fichero de la clase Db*/ 
//                require_once('db.class.php'); 
//                /*Incluimos el fichero de la clase Conf*/ 
//                require_once('conf.class.php'); 
//                $bd = Db::getInstance();
//                
//                $sql = "select ordenEsquemaProductoMaestros,Tabla_idCampoPorDefecto, nombreMaestros, nombreTablaMaestros, numeroActualEsquemaProducto,
//                tipoMaestros, separadorEsquemaProducto, generaCodigoBarrasEsquemaProducto
//                from EsquemaProductoMaestros epm        
//                left join EsquemaProducto ep 
//                on epm.EsquemaProducto_idEsquemaProducto = ep.idEsquemaProducto
//                left join Maestros m 
//                on epm.Maestro_idMaestro = m.idMaestros 
//                where EsquemaProducto_idEsquemaProducto =".$datoficha[0]["EsquemaProducto_idEsquemaProducto"]." and tipoMaestros='V' order by ordenEsquemaProductoMaestros";        
//                $datosVariantes = $bd->ConsultarVista($sql);
//        
//                //echo '<br>'.$sql.'<br>';
//                $sql = "select idFichaTecnicaPinta, FichaTecnica_idFichaTecnica, codigoAlternoPinta, nombrePinta, ftp.Pinta_idPinta
//                         from FichaTecnicaPinta ftp
//                         left join FichaTecnica ft
//                         on ftp.FichaTecnica_idFichaTecnica = ft.idFichaTecnica
//                         left join Pinta p
//                         on ftp.Pinta_idPinta = p.idPinta where idFichaTecnica = ".$idFichaTecnica."";  
//                $datospinta = $bd->ConsultarVista($sql);
//                $totalpinta = count($datospinta);
//                                       
//                // echo $sql.' cantidad '.$totalpinta.'<br>';
//                       
//                $sql = "select idFichaTecnicaColorTela, codigoAlternoColor, nombre1Color, colorDigitadoFichaTecnicaColorTela, 
//                         codigoAlterno1Tercero,ftc.Tercero_idTercero, nombre1Tercero,
//                         ftc.Color_idColor, ftc.Tono_idTono, nombreTono
//                         from FichaTecnicaColorTela ftc
//                         left join FichaTecnica ft
//                         on ftc.FichaTecnica_idFichaTecnica = ft.idFichaTecnica
//                         left join Color c
//                         on ftc.Color_idColor = c.idColor
//                         left join Tercero terc
//                         on ftc.Tercero_idTercero = terc.idTercero
//                         left join Tono ton
//                         on ftc.Tono_idTono=ton.idTono where idFichaTecnica = ".$idFichaTecnica."";        
//                $datosColorTela = $bd->ConsultarVista($sql);
//                $totalcolortela = count($datosColorTela);
//
//                echo $sql.' cantidad '.$totalcolortela.'<br>';
//
//                $sql = "select * from viewFichaTecnicaColores where idFichaTecnica = ".$idFichaTecnica."";        
//                $datoscolores = $bd->ConsultarVista($sql);
//                $totalcolores = count($datoscolores);
//
//            //    echo $sql.' cantidad '.$totalcolores.'<br>';
//
//                $sql = "select * from viewFichaTecnicaTallas where idFichaTecnica = ".$idFichaTecnica."";        
//                $datostalla = $bd->ConsultarVista($sql);
//                $totaltallas = count($datostalla);
//
//             //   echo $sql.' cantidad '.$totaltallas.'<br>';
//
//                $sql = "select * from viewFichaTecnicaTallaComplemento where idFichaTecnica = ".$idFichaTecnica."";        
//                $datoTallaComplemento = $bd->ConsultarVista($sql);
//                $totalTallasComplemento = count($datoTallaComplemento);
//			
//                //  echo $sql.' cantidad '.$totaltallacompl.'<br>';
//                //        if($_POST["accion"] == 1)
//                //        {
////                $sql = "update  EsquemaProducto
////                       set   numeroActualEsquemaProducto = numeroActualEsquemaProducto+1
////                       Where  idEsquemaProducto = ".$datoficha[0]["EsquemaProducto_idEsquemaProducto"];
////
////                $query= $bd->ejecutar($sql);
////        }
//
//                //Creamos un array bidimensional para almacenar los nombre de la tabla a comparar y los campos por defectos
//                $variantes = array();
//                $Pinta= array();
//                $codigoPinta= array();
//                $FichaTecnicaColorTela= array();
//                $codigoFichaTecnicaColorTela= array();
//                
////                $colorDigitadoFichaTecnicaColorTela= array();
////                $codigoAlterno1Tercero =array();
//                
//                $Color = array();
//                $nombreColorEspecialProducto = array();
//                $codigoColor = array();
//                $Talla = array();
//                $codigoTalla = array();
//                $TallaComplemento = array();
//                $codigoTallaComplemento = array();
//        
//                for($var=0; $var<count($datosVariantes); $var++)
//                {
//                    $variantes[$var]['nombreTabla']= $datosVariantes[$var]['nombreTablaMaestros'];
//                    $variantes[$var]['ids']= $datosVariantes[$var]['Tabla_idCampoPorDefecto'];
//                    $variantes[$var]['orden']= $datosVariantes[$var]['ordenEsquemaProductoMaestros'];
//                }
//           
//                //echo '<pre>';
//                //echo '<pre>'.var_dump($array).'</pre>';
//                //echo '</pre>';
//                
//                if($totalpinta == 0)
//                {
//                          $Pinta[] = 0;
//                          $codigoPinta[] = '';
//                }              
//                else
//                {
//                    $vp = 0;
//                    for($p = 0; $p < count($variantes); $p++)
//                    {  
//                            if($variantes[$p]['ids'] == 0)
//                            {
//                                if($variantes[$p]['nombreTabla'] == 'Pinta' &&  $vp == 0)
//                                {
//                                    $vp = 1;
//                                    for($pint = 0 ; $pint < $totalpinta; $pint++)
//                                    {
//                                          $Pinta[] = $datospinta[$pint]['Pinta_idPinta'];
//                                          $codigoPinta[] = $datospinta[$pint]['codigoAlternoPinta'];                                          
//                                         //echo $Pinta[$pint].'<br>';
//                                    }
//                                }
//                            }
//                            else
//                            {
//                                if($variantes[$p]['nombreTabla'] == 'Pinta' &&  $vp == 0)
//                                {
//                                    $vp = 1;
//                                    $sql = " select *
//                                            From EsquemaProductoMaestros 
//                                            left join Maestros m
//                                            on EsquemaProductoMaestros.Maestro_idMaestro = m.idMaestros
//                                            left join Pinta
//                                            on Tabla_idCampoPorDefecto = Pinta.idPinta
//                                            where idPinta =".$variantes[$p]['ids'];            
//                                    $datos = $bd->ConsultarVista($sql); 
//                                 //   echo '<br>'.$sql.'<br>';
//                                    for($x = 0; $x < count($datos); $x++)
//                                    {
//                                        $Pinta[] = $datos[$x]["idPinta"];
//                                        $codigoPinta[] = $datos[$x]["codigoAlternoPinta"];
//                                    }  
//                                }
//                            }
//
//                        }
//                    }
//                    
//                    
//                      
//                    if($totalcolortela == 0)
//                    {
//                        $FichaTecnicaColorTela[] = 0;
//                        $codigoFichaTecnicaColorTela[] = '';
//                    }              
//                    else
//                    {
//                            $vct = 0;
//                            for($p = 0; $p < count($variantes); $p++)
//                            {  
//                                //echo $variantes[$t]['nombreTabla'];
//                                if($variantes[$p]['ids'] == 0)
//                                {
//                                    if($variantes[$p]['nombreTabla'] == 'FichaTecnicaColorTela' && $vct ==0)
//                                    {
//                                        $vct = 1;
//                                        for($colte = 0 ; $colte < $totalcolortela; $colte++)
//                                        {
//                                              $FichaTecnicaColorTela[] = $datosColorTela[$colte]['Color_idColor'];
//                                              $codigoFichaTecnicaColorTela[] = $datosColorTela[$colte]['codigoAlternoColor'].
//                                                                               $datosColorTela[$colte]['colorDigitadoFichaTecnicaColorTela'].
//                                                                               $datosColorTela[$colte]['codigoAlterno1Tercero'];                                          
//                                             echo 'dfsf'.$FichaTecnicaColorTela[$colte].'<br>';
//                                        }
//                                    }
//                                }
//                                else
//                                {
//                                     if($variantes[$p]['nombreTabla'] == 'FichaTecnicaColorTela' && $vct ==0)
//                                     {
//                                            $vct = 1;
//                                            $sql = " select *
//                                                    From EsquemaProductoMaestros 
//                                                    left join Maestros m
//                                                    on EsquemaProductoMaestros.Maestro_idMaestro = m.idMaestros
//                                                    left join Color
//                                                    on Tabla_idCampoPorDefecto = Color.idColor
//                                                    where idColor =".$variantes[$p]['ids'];            
//                                            $datos = $bd->ConsultarVista($sql);            
//                                            // echo '<br>'.$sql.'<br>';
//                                            for($xx = 0; $xx < count($datos); $xx++)
//                                            {
//                                                    $FichaTecnicaColorTela[] = $datos[$xx]["idColor"];
//                                                    $codigoFichaTecnicaColorTela[] = $datos[$xx]["codigoAlternoColor"];
//
//                                              // echo $FichaTecnicaColorTela[$xx].'<br>';
//                                            } 
//                                     }
//                                 }
//
//                            }
//                    }
//                       
//                    if($totalcolores == 0)
//                    {
//                              $Color[] = 0;
//                              $codigoColor[] = '';
//                              $nombreColorEspecialProducto[] = '';
//                    }              
//                    else
//                    {
//                        $vc = 0;
//                        for($p = 0; $p < count($variantes); $p++)
//                        {  
//                            if($variantes[$p]['ids'] == 0)
//                            {
//                                if($variantes[$p]['nombreTabla'] == 'Color' && $vc == 0)
//                                {
//                                     $vc = 1;
//                                    for($col = 0 ; $col < $totalcolores; $col++)
//                                    {
//                                          $Color[] = $datoscolores[$col]['Color_idColor'];
//                                          $codigoColor[] = $datoscolores[$col]['codigoAlternoColor'];
//                                          $nombreColorEspecialProducto[] = $datoscolores[$col]['nombreEspecialFichaTecnicaColor'];
//                                        // echo 'idcolor '.$Color[$col].'<br>';
//                                    }
//                                }
//                            }
//                            else
//                            {
//                                if($variantes[$p]['nombreTabla'] == 'Color' && $vc == 0)
//                                {
//                                    $vc = 1;                    
//                                    $sql = " select *
//                                            From EsquemaProductoMaestros 
//                                            left join Maestros m
//                                            on EsquemaProductoMaestros.Maestro_idMaestro = m.idMaestros
//                                            left join Color
//                                            on Tabla_idCampoPorDefecto = Color.idColor 
//                                            where idColor =".$variantes[$p]['ids'];            
//                                    $datos = $bd->ConsultarVista($sql); 
//                                    for($x = 0; $x < count($datos); $x++)
//                                    {
//                                        $Color[] = $datos[$x]["idColor"];
//                                        $codigoColor[] = $datos[$x]["codigoAlternoColor"];
//                                        $nombreColorEspecialProducto[] = $datos[$x]['nombreEspecialFichaTecnicaColor'];
//                                    }   
//                                }
//                            }
//
//                        } 
//                    }
//        
//        
//
//                    if($totaltallas == 0)
//                    {
//                              $Talla[] = 0;
//                              $codigoTalla[] = '';
//                    }	
//                    else
//                    {
//                        $vta = 0;
//                        for($p = 0; $p < count($variantes); $p++)
//                        {  
//                            if($variantes[$p]['ids'] == 0)
//                            {
//                                if($variantes[$p]['nombreTabla'] == 'Talla' && $vta ==0)
//                                {
//                                    $vta =1;
//                                    for($tal = 0 ; $tal < $totaltallas; $tal++)
//                                    {
//                                              $Talla[] = $datostalla[$tal]['Talla_idTalla'];
//                                              $codigoTalla[] = $datostalla[$tal]['codigoAlternoTalla'];
//                                             // echo $codigoTalla[$tal].'<br>';
//                                    }
//                                }
//                            }
//                            else
//                            {   
//                                if($variantes[$p]['nombreTabla'] == 'Talla' && $vta ==0)
//                                {
//                                    $vta =1;
//                                    $sql = " select *
//                                            From EsquemaProductoMaestros 
//                                            left join Maestros m
//                                            on EsquemaProductoMaestros.Maestro_idMaestro = m.idMaestros
//                                            left join Talla 
//                                            on Tabla_idCampoPorDefecto = Talla.idTalla 
//                                            where idTalla =".$variantes[$p]['ids'];            
//                                    $datos = $bd->ConsultarVista($sql); 
//                                   // echo '<br>'.$sql.'<br>';
//
//                                    for($x = 0; $x < count($datos); $x++)
//                                    {
//                                        $Talla[] = $datos[$x]['Talla_idTalla'];
//                                        $codigoTalla[] = $datos[$x]["codigoAlternoTalla"];
//                                    }  
//                                }  
//                            }
//                        } 
//                    }
//                      
//                      
//                    if($totalTallasComplemento == 0)
//                    {
//                              $TallaComplemento[] = 0;
//                              $codigoTallaComplemento[] = '';
//                    }	
//                    else
//                    {
//                        $vtco = 0;
//                        for($p = 0; $p < count($variantes); $p++)
//                        {  
//                            if($variantes[$p]['ids'] == 0)
//                            {
//                                if($variantes[$p]['nombreTabla'] == 'TallaComplemento' && $vtco==0)
//                                {
//                                      $vtco = 1;
//                                    for($talc = 0 ; $talc < $totalTallasComplemento; $talc++)
//                                    {
//                                             $TallaComplemento[] = $datoTallaComplemento[$talc]['TallaComplemento_idTallaComplemento'];
//                                             $codigoTallaComplemento[] = $datoTallaComplemento[$talc]['codigoAlternoTallaComplemento'];
//                                             //echo $codigoTallaComplemento[$talc].'<br>';
//                                    }
//                                }
//                            }
//                            else
//                            {
//                               if($variantes[$p]['nombreTabla'] == 'TallaComplemento' && $vtco==0)
//                                {
//                                    $vtco = 1;
//                                    $sql = " select *
//                                            From EsquemaProductoMaestros 
//                                            left join Maestros m
//                                            on EsquemaProductoMaestros.Maestro_idMaestro = m.idMaestros
//                                            left join TallaComplemento 
//                                            on Tabla_idCampoPorDefecto = TallaComplemento.idTallaComplemento
//                                            where idTallaComplemento =".$variantes[$p]['ids'];            
//                                    $datos = $bd->ConsultarVista($sql); 
//                                  //  echo '<br>'.$sql.'<br>';
//
//                                    for($x = 0; $x < count($datos); $x++)
//                                    {
//                                        $TallaComplemento[] = $datos[$x]['TallaComplemento_idTallaComplemento'];
//                                        $codigoTallaComplemento[] = $datos[$x]["codigoAlternoTallaComplemento"];
//                                    }   
//                                }
//                            }
//                        } 
//                   }
//        
//        $contador=0;
//        $totalPintaF = count($Pinta);
//        $totalFichaTecnicaColorTelaF = count($FichaTecnicaColorTela);
//        $totalColorF = count($Color);
//        $totalTallaF = count($Talla);
//        $totalTallaComplementoF = count($TallaComplemento);
//
//        $campo1 = '';
//        $totalvariante = count($variantes);
//        
//        /*
//         * Aqui ordenamos los campos segun el orden que se les ha dado en el esquema de producto.
//         * y lo vamos almacenando en una variable llamada campo1
//         */        
//        for($l = 0; $l < $totalvariante; $l++)
//        { 
//            if(isset($variantes[$l+1]['orden']))
//            {
//                if($variantes[$l+1]['orden'] > $variantes[$l]['orden'])
//                {
//                    $campo1 .= $variantes[$l]['nombreTabla'].',';
//                }
//                else
//                {
//                    $campo1 .= $variantes[$l+1]['nombreTabla'].',';
//                }
//            }
//            else
//            {
//                $campo1 .= $variantes[$l]['nombreTabla'].',';
//            }
//        }
//        
//        //Se le quitan las comas
//        $campo1 = substr($campo1, 0, -1);
//        //Se convierte en array
//        $ordenFicha = explode(',', $campo1);    
//        $totalorden = count($ordenFicha);
//        //Este campoa concatenara las referencias que se vayan armando en el ciclo
//        $campoa = '';        
//        //Vamos a crear un array en donde se iran almacenando los id de las tablas a medida que se van creando las referencias         
//        $campotabla = array();
//                
//        /*
//         * ExplicaciÃ³n del siguiente codigo:
//         * Este es un ciclo dinamico. Como solo hay 5 tablas, entonces vamos a quemar el ciclo como string y la ejecutaremos con la funcion
//         * eval. El campo ordenFicha[$i], es el que almacena el nombre de las variables de tablas. (Pinta, FichaTecnicaColorTela, Color, 
//         * Talla, TallaComplemento). El total variantes es el total de combinaciones que se pueden crear.         
//         */
//        
//        for($i=0;$i<$totalorden;$i++)
//        {
//            $codigoTabla = '$codigo'.$ordenFicha[$i];
//            $codigoTablatot = '$total'.$ordenFicha[$i].'F';
//            $estructura = '
//            //print_r('.$codigoTabla.');
//            //echo \'<br>\';
//            //echo $total'.$ordenFicha[$i].'F;
//            for($z = 0 ; $z < $total'.$ordenFicha[$i].'F; $z++)
//            {';
//                //Si solo hay una tabla, para armar las referencias
//                if($totalvariante == 1)
//                {
//                    //echo ' 1 ';
//                    /* La variable $tabla, reemplazara FichaTecnicaColorTela_FichaTecnicaColorTela por Color_idColor, ya que en la vista de producto no 
//                     * no existe. Si en el esquema no encuentra FichaTecnicaColorTela, dejara el nombre de la variable por defecto.
//                     */
//                    $tabla = ($ordenFicha[$i] == 'FichaTecnicaColorTela' ? 'Color' : $ordenFicha[$i]);        
//                    
//                    $estructura .= '$campoa .= $codigo'.$ordenFicha[$i].'[$z].",";';
//                    $estructura .= '$campotabla["'.$ordenFicha[$i].'"][] = (isset($'.$ordenFicha[$i].'[$z]) ? $'.$ordenFicha[$i].'[$z] : 0);';
////                    $estructura .= '$prod = $producto->ConsultarVistaProducto("FichaTecnica_idFichaTecnica = ".$idFichaTecnica. 
////                                                        " and '.$tabla.'_id'.$tabla.' = ".(isset($'.$ordenFicha[$i].'[$z]) ? $'.$ordenFicha[$i].'[$z] : 0),
////                                                        "");';
//                }
//                else
//                {
//                    //echo '1.1';
//                    $estructura .= '
//                    //print_r('.$codigoTabla.');
//                    //echo \'<br>\';
//                    //echo $total'.$ordenFicha[$i+1].'F;
//                    
//                    for($y = 0 ; $y < $total'.$ordenFicha[$i+1].'F; $y++)
//                    {';
//                    if($totalvariante == 2)
//                    {
//                        //echo ' 2 ';
//                        $tabla = ($ordenFicha[$i] == 'FichaTecnicaColorTela' ? 'Color' : $ordenFicha[$i]);
//                        $tabla1 = ($ordenFicha[$i+1] == 'FichaTecnicaColorTela' ? 'Color' : $ordenFicha[$i+1]);
//                        
//                       
//                        $estructura .= '$campoa .= $codigo'.$ordenFicha[$i].'[$z];';
//                        $estructura .= '$campoa .= $codigo'.$ordenFicha[$i+1].'[$y].",";';
//                        
//                        $estructura .= '$campotabla["'.$ordenFicha[$i].'"][] = (isset($'.$ordenFicha[$i].'[$z]) ? $'.$ordenFicha[$i].'[$z] : 0);';
//                        $estructura .= '$campotabla["'.$ordenFicha[$i+1].'"][] = (isset($'.$ordenFicha[$i+1].'[$y]) ? $'.$ordenFicha[$i+1].'[$y] : 0);';
//                        
//                        
////                        $estructura .= '$prod = $producto->ConsultarVistaProducto("FichaTecnica_idFichaTecnica = ".$idFichaTecnica. 
////                                                        " and '.$tabla.'_id'.$tabla.' = ".(isset($'.$ordenFicha[$i].'[$z]) ? $'.$ordenFicha[$i].'[$z] : 0).
////                                                        " and '.$tabla1.'_id'.$tabla1.' = ".(isset($'.$ordenFicha[$i+1].'[$y]) ? $'.$ordenFicha[$i+1].'[$y] : 0)
////                                                        ,""); ';
//                    }
//                    else
//                    {
//                        //echo ' 2.1 ';
//                        $estructura .= '
//                        //print_r('.$codigoTabla.');
//                        //echo \'<br>\';
//                        //echo $total'.$ordenFicha[$i+2].'F;
//                        for($x = 0 ; $x < $total'.$ordenFicha[$i+2].'F; $x++)
//                        {';
//                        if($totalvariante == 3)
//                        {
//                            //echo ' 3 ';
//                            $tabla = ($ordenFicha[$i] == 'FichaTecnicaColorTela' ? 'Color' : $ordenFicha[$i]);
//                            $tabla1 = ($ordenFicha[$i+1] == 'FichaTecnicaColorTela' ? 'Color' : $ordenFicha[$i+1]);
//                            $tabla2 = ($ordenFicha[$i+2] == 'FichaTecnicaColorTela' ? 'Color' : $ordenFicha[$i+2]);
//                            
//                            $estructura .= '$campoa .= $codigo'.$ordenFicha[$i].'[$z];';
//                            $estructura .= '$campoa .= $codigo'.$ordenFicha[$i+1].'[$y];';
//                            $estructura .= '$campoa .= $codigo'.$ordenFicha[$i+2].'[$x].",";';
//                            
//                            $estructura .= '$campotabla["'.$ordenFicha[$i].'"][] = (isset($'.$ordenFicha[$i].'[$z]) ? $'.$ordenFicha[$i].'[$z] : 0);';
//                            $estructura .= '$campotabla["'.$ordenFicha[$i+1].'"][] = (isset($'.$ordenFicha[$i+1].'[$y]) ? $'.$ordenFicha[$i+1].'[$y] : 0);';
//                            $estructura .= '$campotabla["'.$ordenFicha[$i+2].'"][] = (isset($'.$ordenFicha[$i+2].'[$x]) ? $'.$ordenFicha[$i+2].'[$x] : 0);';
//                            
////                            $estructura .= '$prod = $producto->ConsultarVistaProducto("FichaTecnica_idFichaTecnica = ".$idFichaTecnica. 
////                                                        " and '.$tabla.'_id'.$tabla.' = ".(isset($'.$ordenFicha[$i].'[$z]) ? $'.$ordenFicha[$i].'[$z] : 0).
////                                                        " and '.$tabla1.'_id'.$tabla1.' = ".(isset($'.$ordenFicha[$i+1].'[$y]) ? $'.$ordenFicha[$i+1].'[$y] : 0).
////                                                        " and '.$tabla2.'_id'.$tabla2.' = ".(isset($'.$ordenFicha[$i+2].'[$x]) ? $'.$ordenFicha[$i+2].'[$x] : 0)
////                                                        ,"");';
//                        }
//                        else
//                        {
//                            //echo ' 3.1 ';
//                            $estructura .= '
//                            //print_r('.$codigoTabla.');
//                            //echo \'<br>\';
//                            //echo $total'.$ordenFicha[$i+3].'F;
//                            for($w = 0 ; $w < $total'.$ordenFicha[$i+3].'F; $w++)
//                            {';
//                            if($totalvariante == 4)
//                            {
//                                //echo ' 4 ';
//                                $tabla = ($ordenFicha[$i] == 'FichaTecnicaColorTela' ? 'Color' : $ordenFicha[$i]);
//                                $tabla1 = ($ordenFicha[$i+1] == 'FichaTecnicaColorTela' ? 'Color' : $ordenFicha[$i+1]);
//                                $tabla2 = ($ordenFicha[$i+2] == 'FichaTecnicaColorTela' ? 'Color' : $ordenFicha[$i+2]);
//                                $tabla3 = ($ordenFicha[$i+3] == 'FichaTecnicaColorTela' ? 'Color' : $ordenFicha[$i+3]);
//                                
//                                $estructura .= '$campoa .= $codigo'.$ordenFicha[$i].'[$z];';
//                                $estructura .= '$campoa .= $codigo'.$ordenFicha[$i+1].'[$y];';
//                                $estructura .= '$campoa .= $codigo'.$ordenFicha[$i+2].'[$x];';
//                                $estructura .= '$campoa .= $codigo'.$ordenFicha[$i+3].'[$w].",";';
//                                
//                                $estructura .= '$campotabla["'.$ordenFicha[$i].'"][] = (isset($'.$ordenFicha[$i].'[$z]) ? $'.$ordenFicha[$i].'[$z] : 0);';
//                                $estructura .= '$campotabla["'.$ordenFicha[$i+1].'"][] = (isset($'.$ordenFicha[$i+1].'[$y]) ? $'.$ordenFicha[$i+1].'[$y] : 0);';
//                                $estructura .= '$campotabla["'.$ordenFicha[$i+2].'"][] = (isset($'.$ordenFicha[$i+2].'[$x]) ? $'.$ordenFicha[$i+2].'[$x] : 0);';
//                                $estructura .= '$campotabla["'.$ordenFicha[$i+3].'"][] = (isset($'.$ordenFicha[$i+3].'[$w]) ? $'.$ordenFicha[$i+3].'[$w] : 0);';
//                                
////                                $estructura .= '$prod = $producto->ConsultarVistaProducto("FichaTecnica_idFichaTecnica = ".$idFichaTecnica. 
////                                                        " and '.$tabla.'_id'.$tabla.' = ".(isset($'.$ordenFicha[$i].'[$z]) ? $'.$ordenFicha[$i].'[$z] : 0).
////                                                        " and '.$tabla1.'_id'.$tabla1.' = ".(isset($'.$ordenFicha[$i+1].'[$y]) ? $'.$ordenFicha[$i+1].'[$y] : 0).
////                                                        " and '.$tabla2.'_id'.$tabla2.' = ".(isset($'.$ordenFicha[$i+2].'[$x]) ? $'.$ordenFicha[$i+2].'[$x] : 0).
////                                                        " and '.$tabla3.'_id'.$tabla3.' = ".(isset($'.$ordenFicha[$i+3].'[$w]) ? $'.$ordenFicha[$i+3].'[$w] : 0)
////                                                        ,"");';
//                            }
//                            else
//                            {
//                                //echo ' 4.1 ';
//                                $estructura .= '
//                                //print_r('.$codigoTabla.');
//                                //echo \'<br>\';
//                                //echo $total'.$ordenFicha[$i+4].'F;
//                                for($v = 0 ; $v < $total'.$ordenFicha[$i+4].'F; $v++)
//                                {';
//                                    $tabla = ($ordenFicha[$i] == 'FichaTecnicaColorTela' ? 'Color' : $ordenFicha[$i]);
//                                    $tabla1 = ($ordenFicha[$i+1] == 'FichaTecnicaColorTela' ? 'Color' : $ordenFicha[$i+1]);
//                                    $tabla2 = ($ordenFicha[$i+2] == 'FichaTecnicaColorTela' ? 'Color' : $ordenFicha[$i+2]);
//                                    $tabla3 = ($ordenFicha[$i+3] == 'FichaTecnicaColorTela' ? 'Color' : $ordenFicha[$i+3]);
//                                    $tabla4 = ($ordenFicha[$i+4] == 'FichaTecnicaColorTela' ? 'Color' : $ordenFicha[$i+4]);
//                                    
//                                    $estructura .= '$campoa .= $codigo'.$ordenFicha[$i].'[$z];';
//                                    $estructura .= '$campoa .= $codigo'.$ordenFicha[$i+1].'[$y];';
//                                    $estructura .= '$campoa .= $codigo'.$ordenFicha[$i+2].'[$x];';
//                                    $estructura .= '$campoa .= $codigo'.$ordenFicha[$i+3].'[$w];';
//                                    $estructura .= '$campoa .= $codigo'.$ordenFicha[$i+4].'[$v].",";';
//                                    
//                                    $estructura .= '$campotabla["'.$ordenFicha[$i].'"][] = (isset($'.$ordenFicha[$i].'[$z]) ? $'.$ordenFicha[$i].'[$z] : 0);';
//                                    $estructura .= '$campotabla["'.$ordenFicha[$i+1].'"][] = (isset($'.$ordenFicha[$i+1].'[$y]) ? $'.$ordenFicha[$i+1].'[$y] : 0);';
//                                    $estructura .= '$campotabla["'.$ordenFicha[$i+2].'"][] = (isset($'.$ordenFicha[$i+2].'[$x]) ? $'.$ordenFicha[$i+2].'[$x] : 0);';
//                                    $estructura .= '$campotabla["'.$ordenFicha[$i+3].'"][] = (isset($'.$ordenFicha[$i+3].'[$w]) ? $'.$ordenFicha[$i+3].'[$w] : 0);';
//                                    $estructura .= '$campotabla["'.$ordenFicha[$i+4].'"][] = (isset($'.$ordenFicha[$i+4].'[$v]) ? $'.$ordenFicha[$i+4].'[$v] : 0);';
//                                    
////                                    $estructura .= '$prod = $producto->ConsultarVistaProducto("FichaTecnica_idFichaTecnica = ".$idFichaTecnica. 
////                                                        " and '.$tabla.'_id'.$tabla.' = ".(isset($'.$ordenFicha[$i].'[$z]) ? $'.$ordenFicha[$i].'[$z] : 0).
////                                                        " and '.$tabla1.'_id'.$tabla1.' = ".(isset($'.$ordenFicha[$i+1].'[$y]) ? $'.$ordenFicha[$i+1].'[$y] : 0).
////                                                        " and '.$tabla2.'_id'.$tabla2.' = ".(isset($'.$ordenFicha[$i+2].'[$x]) ? $'.$ordenFicha[$i+2].'[$x] : 0).
////                                                        " and '.$tabla3.'_id'.$tabla3.' = ".(isset($'.$ordenFicha[$i+3].'[$w]) ? $'.$ordenFicha[$i+3].'[$w] : 0).
////                                                        " and '.$tabla4.'_id'.$tabla4.' = ".(isset($'.$ordenFicha[$i+4].'[$v]) ? $'.$ordenFicha[$i+4].'[$v] : 0)
////                                                        ,"");';
//                                $estructura .='}';
//                            }
//                            $estructura .= '}';
//                        }
//                        $estructura .= '}';
//                    }
//                    $estructura .= '}';
//                }
//            $estructura .= '}';
//            $estructura .= '$campoa = substr($campoa, 0, -1);';
//            $i = $totalorden;
//          //  echo $estructura;            
//            eval($estructura);
//        } 
//        
//        $refcampoa = explode(',', $campoa);     
//        $totalcampoa = count($refcampoa);
////        echo '<pre>';
////        print_r($prod);
////        echo '</pre>';    
////        echo '<pre>';
////       print_r($refcampoa);
////        echo '</pre>';
////        print_r($Talla);
////        print_r($Color);
//    //    echo '<br>cantidad '.$totalcampoa.'<br>';
////         echo '<pre>';
////        print_r($campotabla);
////        echo '</pre>';
//        
//        
//        
//        for($o=0;$o<$totalcampoa;$o++)
//        {
//
//            echo 'color '.(isset($campotabla['Color']) ? $campotabla['Color'][$o] : $campotabla['FichaTecnicaColorTela'][$o]);
////            $prod = $producto->ConsultarVistaProducto("FichaTecnica_idFichaTecnica = ".$idFichaTecnica. 
////                                         " and referenciaProducto = ".$refcampoa[$o], "");     
//            
//                    // buscamos si ya existe un producto asociado a la ficha tecnica con el mismo color y talla
//                    $prod = $producto->ConsultarVistaProducto("FichaTecnica_idFichaTecnica = ".$idFichaTecnica. 
//                                                        " and Color_idColor = ".(isset($campotabla['Color']) ? $campotabla['Color'][$o] : $campotabla['FichaTecnicaColorTela'][$o]).
//                                                        " and Talla_idTalla = ".(isset($campotabla['Talla']) ? $campotabla['Talla'][$o] : 0).
//                                                        " and TallaComplemento_idTallaComplemento = ".(isset($campotabla['TallaComplemento'][$o]) ? $campotabla['TallaComplemento'][$o] : 0).
//                                                        " and Pinta_idPinta = ".(isset($campotabla['Pinta'][$o]) ? $campotabla['Pinta'][$o] : 0),
//                                                        "");
//                   
//		    // llenamos los campos con los datos del formulario de ficha
//                    $producto->idProducto = 0;
//                    $producto->codigoAlternoProducto = trim($datoficha[0]["referenciaBaseFichaTecnica"]); 
//                    $producto->referenciaProducto = trim($datoficha[0]["referenciaBaseFichaTecnica"]).
//                                                    trim($datosVariantes[0]['separadorEsquemaProducto'])  . 
//                                                    trim($refcampoa[$o]);
//                    
//                    $producto->nombreLargoProducto = $datoficha[0]["nombreLargoFichaTecnica"];
//                    $producto->nombreCortoProducto = $datoficha[0]["nombreCortoFichaTecnica"];
//                    $producto->precioProducto = $datoficha[0]["precioFichaTecnica"];
//                    $producto->ivaIncluidoProducto = $datoficha[0]["ivaIncluidoFichaTecnica"];
//                    $producto->acumulaPuntosProducto = $datoficha[0]["acumulaPuntosFichaTecnica"];
//                    $producto->redimePuntosProducto = $datoficha[0]["redimePuntosFichaTecnica"];
//                    $producto->fechaCreacionProducto = date("Y-m-d");
//                    $producto->estadoProducto = 'ACTIVO';
//                    //$producto->clasificacionProducto = '*01*';
//                    $producto->clasificacionProducto = ($tipoFicha == 'P' ? '*01*' : '*02*');
//                    $producto->Color_idColor = (isset($campotabla['Color']) ? $campotabla['Color'][$o] : $campotabla['FichaTecnicaColorTela'][$o]);
//                   // $producto->Color_idColor = (isset($Color[$o]) ? $Color[$o] : isset($FichaTecnicaColorTela[$o]) ? $FichaTecnicaColorTela[$o] : 0);
//                    $producto->Talla_idTalla = (isset($campotabla['Talla']) ? $campotabla['Talla'][$o] : 0);
//                    $producto->TallaComplemento_idTallaComplemento = (isset($campotabla['TallaComplemento'][$o]) ? $campotabla['TallaComplemento'][$o] : 0);
//                    $producto->FichaTecnica_idFichaTecnica = $idFichaTecnica;
//                    $producto->nombreColorEspecialProducto = $nombreColorEspecialProducto[$o];                
//                    $producto->cantidadContenidaProducto = 0;
//                    $producto->Tercero_idCliente =  $datoficha[0]["Tercero_idCliente"];
//                    $producto->Marca_idMarca = $datoficha[0]["Marca_idMarca"];
//                    $producto->Pais_idPaisOrigen = $datoficha[0]["Pais_idPais"];
//                    $producto->EstadoConservacion_idEstadoConservacion =  $datoficha[0]["EstadoConservacion_idEstadoConservacion"];
//                    $producto->TipoProducto_idTipoProducto =  $datoficha[0]["TipoProducto_idTipoProducto"];
//                    $producto->TipoNegocio_idTipoNegocio =  $datoficha[0]["TipoNegocio_idTipoNegocio"];
//                    $producto->Temporada_idTemporada = $datoficha[0]["Temporada_idTemporada"];
//                    $producto->Composicion_idComposicion = $datoficha[0]["Composicion_idComposicion"];
//                    $producto->Categoria_idCategoria =  $datoficha[0]["Categoria_idCategoria"];
//                    $producto->UnidadMedida_idCompra =  $datoficha[0]["UnidadMedida_idCompra"];
//                    $producto->UnidadMedida_idVenta =  $datoficha[0]["UnidadMedida_idVenta"];
//                    $producto->Clima_idClima = $datoficha[0]["Clima_idClima"];
//                    $producto->Difusion_idDifusion = $datoficha[0]["Difusion_idDifusion"];
//                    $producto->Estrategia_idEstrategia = $datoficha[0]["Estrategia_idEstrategia"];
//                    $producto->Evento_idEvento = $datoficha[0]["Evento_idEvento"];
//                    $producto->PosicionArancelaria_idPosicionArancelaria = $datoficha[0]["PosicionArancelaria_idPosicionArancelaria"];
//                    $producto->Seccion_idSeccion = $datoficha[0]["Seccion_idSeccion"];
//                    $producto->ClienteObjetivo_idClienteObjetivo =  $datoficha[0]["ClienteObjetivo_idClienteObjetivo"];
//                    $producto->SegmentoOperacion_idSegmentoOperacion =  $datoficha[0]["SegmentoOperacion_idSegmentoOperacion"];
//
//                    //PAra logistica
//                    $producto->pesoBrutoFichaTecnica = $datoficha[0]["pesoBrutoFichaTecnica"];
//                    $producto->pesoNetoFichaTecnica = $datoficha[0]["pesoNetoFichaTecnica"];
//                    $producto->altoFichaTecnica = $datoficha[0]["altoFichaTecnica"];
//                    $producto->anchoFichaTecnica = $datoficha[0]["anchoFichaTecnica"];
//                    $producto->profundidadFichaTecnica = $datoficha[0]["profundidadFichaTecnica"];
//                    $producto->diasReposicionFichaTecnica = $datoficha[0]["diasReposicionFichaTecnica"];
//                    $producto->puntoPedidoFichaTecnica = $datoficha[0]["puntoPedidoFichaTecnica"];
//                    $producto->cantidadSeguridadFichaTecnica = $datoficha[0]["cantidadSeguridadFichaTecnica"];
//                    $producto->stockMinimoFichaTecnica = $datoficha[0]["stockMinimoFichaTecnica"];
//                    $producto->stockMaximoFichaTecnica = $datoficha[0]["stockMaximoFichaTecnica"];
//                    
//                    $producto->Pinta_idPinta = (isset($campotabla['Pinta'][$o]) ? $campotabla['Pinta'][$o] : 0);
//                    $producto->CalibreHilo_idCalibreHilo = $datoficha[0]['CalibreHilo_idCalibreHilo'];
//                    
//                    //Si en esuqemas de producto tiene el chulo de generar codigo de barras se debe llamar a la funcion, sino se manda vacio
//                    if($datosVariantes[0]["generaCodigoBarrasEsquemaProducto"] == 1)
//                    {
//                        // generamos el codigo de barras del producto
//                        $producto->codigoBarrasProducto = $codigobarras->GenerarCodigoBarras();
//                    }
//                    else
//                    {
//                        $producto->codigoBarrasProducto = '';
//                    }
//
//                   //echo ('isfcha '.$idFichaTecnica. ' idproducto '.$prod[0]["idProducto"]);
//                    // si el producto ya existe en el modulo comercial, rescatamos los datos generales que ya tiene grabados por si los han modificado
//
//                    //mirar si en esta parte se debe adicionar la condicion || $existe>o (para que pueda modificar la referncia que ya existe, p ero adicionando en esta parte que lleve el is de ficha)
//                    if(isset($prod[0]["idProducto"]))
//                    {	                    
//                      //  echo '<br>prod<br>';                       
//                        
//                        $producto->idProducto = $prod[0]["idProducto"];
//                        $producto->referenciaProducto = $prod[0]["referenciaProducto"];
////                        $producto->nombreLargoProducto = $prod[0]["nombreLargoProducto"];
////                        $producto->nombreCortoProducto = $prod[0]["nombreCortoProducto"];
//                        $producto->fechaCreacionProducto = $prod[0]["fechaCreacionProducto"];
//                        $producto->estadoProducto = $prod[0]["estadoProducto"];
//                        $producto->clasificacionProducto = $prod[0]["clasificacionProducto"];
//                        $producto->codigoBarrasProducto = ($prod[0]["codigoBarrasProducto"] == '' ? $producto->codigoBarrasProducto : $prod[0]["codigoBarrasProducto"]);
//
//                        /*// los campos que se modifican en el detalle de productos, se deben llenar con el datos correspondiente a su talla y Color
//                        // buscamos la talla y el color en los arrays de la pestaï¿½a de productos para saber el offset de la linea
//                        $colores = $_POST['Producto_idColor'];
//                        $tallas = $_POST['Producto_idTalla'];
//                        $barras = $_POST['codigoBarrasProducto'];
//                        $refclien = $_POST['referenciaClienteProducto'];
//                        $refprov = $_POST['referenciaProveedorProducto'];
//                        $codalter = $_POST["codigoAlternoProducto"];
//
//                        $totalreg = count($colores);
//                        for($reg = 0 ; $reg < $totalreg; $reg++)
//                        {							
//                            if($colores[$reg] == $fichatecnica->Color_idColor[$col] and $tallas[$reg] == $fichatecnica->Talla_idTalla[$tal])
//                            {
//                                $producto->codigoBarrasProducto = $barras[$reg];
//                                $producto->referenciaClienteProducto = $refclien[$reg];
//                                $producto->referenciaProveedorProducto = $refprov[$reg];
//                                $producto->codigoAlternoProducto = $codalter[$reg];
//                            }
//                        }*/
//
//                        // Actualizamos la informaciï¿½nn del producto
//                        $producto->ModificarProductoFichaTecnica() ;
//                        //echo 'MODIFICO';
//                    }
//                    else
//                    {
//                        $referencia = $producto->ConsultarVistaProducto("referenciaProducto = '".$producto->referenciaProducto."'",
//                                                                    "");
//                            
//                        //  echo '<br>ref<br>';
//                        
//                        //si la referencia ya estÃ¡ cerada, pero no tiene Ficha tecnica asociada se modifica y se le adiciona la FT
//                        if(isset($referencia[0]["idProducto"]))
//                        {                     
//                          //echo '<br>referencia<br>';
//                            $producto->idProducto = $referencia[0]["idProducto"];
//                            $producto->referenciaProducto = $referencia[0]["referenciaProducto"];
//                            $producto->nombreLargoProducto = $referencia[0]["nombreLargoProducto"];
//                            $producto->nombreCortoProducto = $referencia[0]["nombreCortoProducto"];
//                            $producto->fechaCreacionProducto = $referencia[0]["fechaCreacionProducto"];
//                            $producto->estadoProducto = $referencia[0]["estadoProducto"];
//                            $producto->clasificacionProducto = $referencia[0]["clasificacionProducto"];
//                            $producto->codigoBarrasProducto = ($referencia[0]["codigoBarrasProducto"] == '' ? $producto->codigoBarrasProducto : $referencia[0]["codigoBarrasProducto"]);
//                            
//                            $producto->ModificarProductoFichaTecnica() ;
//                        }
//                        else
//                        {
//                            /*
//                            // los campos que se modifican en el detalle de productos, se deben llenar con el datos correspondiente a su talla y Color
//                            // buscamos la talla y el color en los arrays de la pestaï¿½a de productos para saber el offset de la linea
//                            $colores = $_POST['Color_idColor'];
//                            $tallas = $_POST['Talla_idTalla'];
//                            $barras = $_POST['codigoBarrasProducto'];
//                            $refclien = $_POST['referenciaClienteProducto'];
//                            $refprov = $_POST['referenciaProveedorProducto'];
//                            $codalter = $_POST["codigoAlternoProducto"];
//
//                            $totalreg = count($colores);
//                            for($reg = 0 ; $reg < $totalreg; $reg++)
//                            {							
//                                if( (isset($colores[$reg]) and  $colores[$reg] == $fichatecnica->Color_idColor[$col]) and 
//                                    (isset($tallas[$reg]) and  $tallas[$reg] == $fichatecnica->Talla_idTalla[$tal]))
//                                {
//                                    $producto->codigoBarrasProducto = $barras[$reg];
//                                    $producto->referenciaClienteProducto = $refclien[$reg];
//                                    $producto->referenciaProveedorProducto = $refprov[$reg];
//                                    $producto->codigoAlternoProducto = $codalter[$reg];
//                                }
//                                else 
//                                {
//                                    $producto->codigoBarrasProducto = '';
//                                    $producto->referenciaClienteProducto = '';
//                                    $producto->referenciaProveedorProducto = '';
//                                    $producto->codigoAlternoProducto = '';
//                                }
//                            }*/                             
//                            // Adicionamos la informaciï¿½nn del producto
//                            $producto->AdicionarProductoFichaTecnica();
//                            $producto->AdicionarImpuestoRetencionProductoFichaTecnica();					
//                        }
//                    }
//        }
//		//echo ('ingresa a aprobado');
//		// cambiamos el estado de la ficha tÃ©cnica por aprobado
//	
////		$sql = "update FichaTecnica
////				set estadoFichaTecnica = 'APROBADO'
////				where idFichaTecnica = $idFichaTecnica";
////		$bd = Db::getInstance();
////		$query = $bd->ejecutar($sql); 
//
//		return 1;	
//	}
//    }
    
	function AprobarFichaTecnica($idFichaTecnica,$tipoFicha)
	{		
           // echo "Entro Aprobar";
            // parametros:
            // $idFichaTecnica : id de la ficha tecnica a aprobar
            // Errores devueltos:
            // -1 : la ficha tecnica no existe
            // -2 : La ficha Tecnica no tiene asociado un esquema de aprobacion	        
        
            set_time_limit(0);
		
            // instanciamos la clase Producto
            require_once('../clases/producto.class.php');
            $producto = new Producto();
            require_once 'codigobarras.class.php';		
            $codigobarras = new CodigoBarras();

            // consultamos la vista de la ficha tecnica enviada por parametro
            $datoficha = $this->ConsultarVistaFichaTecnicaGeneral("idFichaTecnica = $idFichaTecnica");		             		                 
           //   echo 'entro b1';
            if($this->estadoFichaTecnica == 'PROTOTIPO')
            {
               return -1;
            }
            else
            {
		// si la ficha no existe, devolvemos error
               // echo 'entro b2';
                    if(!isset($datoficha[0]["idFichaTecnica"]))
			return -1;
			
		//echo $datoficha[0]["nombreEsquemaProducto"];
		// si no tiene lleno el esquema de aprobaciÃ³n , retornamos un error Tener en cuenta en la ficha de hilazas (atex) el esquema es un nuemro quemado
		if(!isset($datoficha[0]["EsquemaProducto_idEsquemaProducto"]) or $datoficha[0]["EsquemaProducto_idEsquemaProducto"] == 0 or $datoficha[0]["nombreEsquemaProducto"] == NULL)
			return -2;
                
                
        	  /*Incluimos el fichero de la clase Db*/ 
                require_once('db.class.php'); 
                /*Incluimos el fichero de la clase Conf*/ 
                require_once('conf.class.php'); 
                $bd = Db::getInstance();
                
                $sql = "select ordenEsquemaProductoMaestros,Tabla_idCampoPorDefecto, nombreMaestros, nombreTablaMaestros, numeroActualEsquemaProducto,
                tipoMaestros, separadorEsquemaProducto, generaCodigoBarrasEsquemaProducto
                from EsquemaProductoMaestros epm        
                left join EsquemaProducto ep 
                on epm.EsquemaProducto_idEsquemaProducto = ep.idEsquemaProducto
                left join Maestros m 
                on epm.Maestro_idMaestro = m.idMaestros 
                where EsquemaProducto_idEsquemaProducto =".$datoficha[0]["EsquemaProducto_idEsquemaProducto"]." and tipoMaestros='V' order by ordenEsquemaProductoMaestros";        
                $datosVariantes = $bd->ConsultarVista($sql);
        
                //echo '<br>datosVariantes: '.$sql.'<br>';
                $sql = "select idFichaTecnicaPinta, FichaTecnica_idFichaTecnica, codigoAlternoPinta, nombrePinta, ftp.Pinta_idPinta, ftp.Predominante_idColor
                         from FichaTecnicaPinta ftp
                         left join FichaTecnica ft
                         on ftp.FichaTecnica_idFichaTecnica = ft.idFichaTecnica
                         left join Pinta p
                         on ftp.Pinta_idPinta = p.idPinta where idFichaTecnica = ".$idFichaTecnica."";  
                $datospinta = $bd->ConsultarVista($sql);
                $totalpinta = count($datospinta);
                                       
                //echo '<br>Sql datospinta: '.$sql.'<br>cantidad:'.$totalpinta.'<br>';
                //echo '<br> datospinta: '.  print_r($datospinta).'<br>';
                       
                $sql = "select idFichaTecnicaColorTela, codigoAlternoColor, nombre1Color, colorDigitadoFichaTecnicaColorTela, 
                         codigoAlterno1Tercero,ftc.Tercero_idTercero, nombre1Tercero,
                         ftc.Color_idColor, ftc.Tono_idTono, nombreTono
                         from FichaTecnicaColorTela ftc
                         left join FichaTecnica ft
                         on ftc.FichaTecnica_idFichaTecnica = ft.idFichaTecnica
                         left join Color c
                         on ftc.Color_idColor = c.idColor
                         left join Tercero terc
                         on ftc.Tercero_idTercero = terc.idTercero
                         left join Tono ton
                         on ftc.Tono_idTono=ton.idTono where idFichaTecnica = ".$idFichaTecnica."";        
                $datosColorTela = $bd->ConsultarVista($sql);
                $totalcolortela = count($datosColorTela);

                //echo '<br>datosColorTela'.$sql.' <br>cantidad: '.$totalcolortela.'<br>';

                $sql = "select * from viewFichaTecnicaColores where idFichaTecnica = ".$idFichaTecnica."";        
                $datoscolores = $bd->ConsultarVista($sql);
                $totalcolores = count($datoscolores);

               //echo $sql.' cantidad '.$totalcolores.'<br>';

                $sql = "select * from viewFichaTecnicaTallas where idFichaTecnica = ".$idFichaTecnica."";        
                $datostalla = $bd->ConsultarVista($sql);
                $totaltallas = count($datostalla);

             //   echo $sql.' cantidad '.$totaltallas.'<br>';

                $sql = "select * from viewFichaTecnicaTallaComplemento where idFichaTecnica = ".$idFichaTecnica."";        
                $datoTallaComplemento = $bd->ConsultarVista($sql);
                $totalTallasComplemento = count($datoTallaComplemento);
			
                //  echo $sql.' cantidad '.$totaltallacompl.'<br>';
                //        if($_POST["accion"] == 1)
                //        {
//                $sql = "update  EsquemaProducto
//                       set   numeroActualEsquemaProducto = numeroActualEsquemaProducto+1
//                       Where  idEsquemaProducto = ".$datoficha[0]["EsquemaProducto_idEsquemaProducto"];
//
//                $query= $bd->ejecutar($sql);
//        }

             //Creamos un array bidimensional para almacenar los nombre de la tabla a comparar y los campos por defectos
                $variantes = array();
                $Pinta= array();
                $codigoPinta= array();
                $FichaTecnicaColorTela= array();
                $codigoFichaTecnicaColorTela= array();
                
//                $colorDigitadoFichaTecnicaColorTela= array();
//                $codigoAlterno1Tercero =array();
                
                $Color = array();
                $nombreColorEspecialProducto = array();
                $codigoColor = array();
                $Talla = array();
                $codigoTalla = array();
                $TallaComplemento = array();
                $codigoTallaComplemento = array();
        
                for($var=0; $var<count($datosVariantes); $var++)
                {
                    $variantes[$var]['nombreTabla']= $datosVariantes[$var]['nombreTablaMaestros'];
                    $variantes[$var]['ids']= $datosVariantes[$var]['Tabla_idCampoPorDefecto'];
                    $variantes[$var]['orden']= $datosVariantes[$var]['ordenEsquemaProductoMaestros'];
                }
                //echo '<pre>';
                //echo '<pre>'.var_dump($array).'</pre>';
                //echo '</pre>';

                if($totalpinta == 0)
                {
                          $Pinta[] = 0;
                          $codigoPinta[] = '';
                }              
                else
                {
                    $vp = 0;
                    for($p = 0; $p < count($variantes); $p++)
                    {  
                            if($variantes[$p]['ids'] == 0)
                            {
                                if($variantes[$p]['nombreTabla'] == 'Pinta' &&  $vp == 0)
                                {
                                    $vp = 1;
                                    for($pint = 0 ; $pint < $totalpinta; $pint++)
                                    {
                                          $Pinta[] = $datospinta[$pint]['Pinta_idPinta'];
                                          $codigoPinta[] = $datospinta[$pint]['codigoAlternoPinta'];                                          
                                         //echo $Pinta[$pint].'<br>';
                                    }
                                }
                            }
                            else
                            {
                                if($variantes[$p]['nombreTabla'] == 'Pinta' &&  $vp == 0)
                                {
                                    $vp = 1;
                                    $sql = " select *
                                            From EsquemaProductoMaestros 
                                            left join Maestros m
                                            on EsquemaProductoMaestros.Maestro_idMaestro = m.idMaestros
                                            left join Pinta
                                            on Tabla_idCampoPorDefecto = Pinta.idPinta
                                            where idPinta =".$variantes[$p]['ids'];            
                                    $datos = $bd->ConsultarVista($sql); 
                                 //   echo '<br>'.$sql.'<br>';
                                    for($x = 0; $x < count($datos); $x++)
                                    {
                                        $Pinta[] = $datos[$x]["idPinta"];
                                        $codigoPinta[] = $datos[$x]["codigoAlternoPinta"];
                                    }  
                                }
                            }

                        }
                    }
                    
                    
                      
                    if($totalcolortela == 0)
                    {
                        $FichaTecnicaColorTela[] = 0;
                        $codigoFichaTecnicaColorTela[] = '';
                    }              
                    else
                    {
                            $vct = 0;
                            for($p = 0; $p < count($variantes); $p++)
                            {  
                                //echo $variantes[$t]['nombreTabla'];
                                if($variantes[$p]['ids'] == 0)
                                {
                                    if($variantes[$p]['nombreTabla'] == 'FichaTecnicaColorTela' && $vct ==0)
                                    {
                                        $vct = 1;
                                        for($colte = 0 ; $colte < $totalcolortela; $colte++)
                                        {
                                              $FichaTecnicaColorTela[] = $datosColorTela[$colte]['Color_idColor'];
                                              $codigoFichaTecnicaColorTela[] = $datosColorTela[$colte]['codigoAlternoColor'].
                                                                               $datosColorTela[$colte]['colorDigitadoFichaTecnicaColorTela'];
                                                                               //$datosColorTela[$colte]['codigoAlterno1Tercero'];                                          
                                             //echo $FichaTecnicaColorTela[$colte].'<br>';
                                        }
                                    }
                                }
                                else
                                {
                                     if($variantes[$p]['nombreTabla'] == 'FichaTecnicaColorTela' && $vct ==0)
                                     {
                                            $vct = 1;
                                            $sql = " select *
                                                    From EsquemaProductoMaestros 
                                                    left join Maestros m
                                                    on EsquemaProductoMaestros.Maestro_idMaestro = m.idMaestros
                                                    left join Color
                                                    on Tabla_idCampoPorDefecto = Color.idColor
                                                    where idColor =".$variantes[$p]['ids'];            
                                            $datos = $bd->ConsultarVista($sql);            
                                            // echo '<br>'.$sql.'<br>';
                                            for($xx = 0; $xx < count($datos); $xx++)
                                            {
                                                    $FichaTecnicaColorTela[] = $datos[$xx]["idColor"];
                                                    $codigoFichaTecnicaColorTela[] = $datos[$xx]["codigoAlternoColor"];

                                              // echo $FichaTecnicaColorTela[$xx].'<br>';
                                            } 
                                     }
                                 }

                            }
                    }
                       
                    if($totalcolores == 0)
                    {
                              $Color[] = 0;
                              $codigoColor[] = '';
                              $nombreColorEspecialProducto[] = '';
                    }              
                    else
                    {
                        $vc = 0;
                        for($p = 0; $p < count($variantes); $p++)
                        {  
                            if($variantes[$p]['ids'] == 0)
                            {
                                if($variantes[$p]['nombreTabla'] == 'Color' && $vc == 0)
                                {
                                     $vc = 1;
                                    for($col = 0 ; $col < $totalcolores; $col++)
                                    {
                                          $Color[] = $datoscolores[$col]['Color_idColor'];
                                          $codigoColor[] = $datoscolores[$col]['codigoAlternoColor'];
                                          $nombreColorEspecialProducto[] = $datoscolores[$col]['nombreEspecialFichaTecnicaColor'];
                                        // echo 'idcolor '.$Color[$col].'<br>';
                                    }
                                }
                            }
                            else
                            {
                                if($variantes[$p]['nombreTabla'] == 'Color' && $vc == 0)
                                {
                                    $vc = 1;                    
                                    $sql = " select *
                                            From EsquemaProductoMaestros 
                                            left join Maestros m
                                            on EsquemaProductoMaestros.Maestro_idMaestro = m.idMaestros
                                            left join Color
                                            on Tabla_idCampoPorDefecto = Color.idColor 
                                            where idColor =".$variantes[$p]['ids'];            
                                    $datos = $bd->ConsultarVista($sql); 
                                    for($x = 0; $x < count($datos); $x++)
                                    {
                                        $Color[] = $datos[$x]["idColor"];
                                        $codigoColor[] = $datos[$x]["codigoAlternoColor"];
                                        $nombreColorEspecialProducto[] = $datos[$x]['nombreEspecialFichaTecnicaColor'];
                                    }   
                                }
                            }

                        } 
                    }
        
        

                    if($totaltallas == 0)
                    {
                              $Talla[] = 0;
                              $codigoTalla[] = '';
                    }	
                    else
                    {
                        $vta = 0;
                        for($p = 0; $p < count($variantes); $p++)
                        {  
                            if($variantes[$p]['ids'] == 0)
                            {
                                if($variantes[$p]['nombreTabla'] == 'Talla' && $vta ==0)
                                {
                                    $vta =1;
                                    for($tal = 0 ; $tal < $totaltallas; $tal++)
                                    {
                                              $Talla[] = $datostalla[$tal]['Talla_idTalla'];
                                              $codigoTalla[] = $datostalla[$tal]['codigoAlternoTalla'];
                                             // echo $codigoTalla[$tal].'<br>';
                                    }
                                }
                            }
                            else
                            {   
                                if($variantes[$p]['nombreTabla'] == 'Talla' && $vta ==0)
                                {
                                    $vta =1;
                                    $sql = " select *
                                            From EsquemaProductoMaestros 
                                            left join Maestros m
                                            on EsquemaProductoMaestros.Maestro_idMaestro = m.idMaestros
                                            left join Talla 
                                            on Tabla_idCampoPorDefecto = Talla.idTalla 
                                            where idTalla =".$variantes[$p]['ids'];            
                                    $datos = $bd->ConsultarVista($sql); 
                                   // echo '<br>'.$sql.'<br>';

                                    for($x = 0; $x < count($datos); $x++)
                                    {
                                        $Talla[] = $datos[$x]['Talla_idTalla'];
                                        $codigoTalla[] = $datos[$x]["codigoAlternoTalla"];
                                    }  
                                }  
                            }
                        } 
                    }
                      
                      
                    if($totalTallasComplemento == 0)
                    {
                              $TallaComplemento[] = 0;
                              $codigoTallaComplemento[] = '';
                    }	
                    else
                    {
                        $vtco = 0;
                        for($p = 0; $p < count($variantes); $p++)
                        {  
                            if($variantes[$p]['ids'] == 0)
                            {
                                if($variantes[$p]['nombreTabla'] == 'TallaComplemento' && $vtco==0)
                                {
                                      $vtco = 1;
                                    for($talc = 0 ; $talc < $totalTallasComplemento; $talc++)
                                    {
                                             $TallaComplemento[] = $datoTallaComplemento[$talc]['TallaComplemento_idTallaComplemento'];
                                             $codigoTallaComplemento[] = $datoTallaComplemento[$talc]['codigoAlternoTallaComplemento'];
                                             //echo $codigoTallaComplemento[$talc].'<br>';
                                    }
                                }
                            }
                            else
                            {
                               if($variantes[$p]['nombreTabla'] == 'TallaComplemento' && $vtco==0)
                                {
                                    $vtco = 1;
                                    $sql = " select *
                                            From EsquemaProductoMaestros 
                                            left join Maestros m
                                            on EsquemaProductoMaestros.Maestro_idMaestro = m.idMaestros
                                            left join TallaComplemento 
                                            on Tabla_idCampoPorDefecto = TallaComplemento.idTallaComplemento
                                            where idTallaComplemento =".$variantes[$p]['ids'];            
                                    $datos = $bd->ConsultarVista($sql); 
                                  //  echo '<br>'.$sql.'<br>';

                                    for($x = 0; $x < count($datos); $x++)
                                    {
                                        $TallaComplemento[] = $datos[$x]['TallaComplemento_idTallaComplemento'];
                                        $codigoTallaComplemento[] = $datos[$x]["codigoAlternoTallaComplemento"];
                                    }   
                                }
                            }
                        } 
                   }
        
        
        $contador=0;
        $totalPintaF = count($Pinta);
        $totalFichaTecnicaColorTelaF = count($FichaTecnicaColorTela);
        $totalColorF = count($Color);
        $totalTallaF = count($Talla);
        $totalTallaComplementoF = count($TallaComplemento);

        $campo1 = '';
        $totalvariante = count($variantes);
        

        for($l = 0; $l < $totalvariante; $l++)
        { 
            if(isset($variantes[$l+1]['orden']))
            {
                if($variantes[$l+1]['orden'] > $variantes[$l]['orden'])
                {
                    $campo1 .= $variantes[$l]['nombreTabla'].',';
                }
                else
                {
                    $campo1 .= $variantes[$l+1]['nombreTabla'].',';
                }
            }
            else
            {
                $campo1 .= $variantes[$l]['nombreTabla'].',';
            }
        }
        
        
        //Se le quitan las comas
        $campo1 = substr($campo1, 0, -1);
        //Se convierte en array
        $ordenFicha = explode(',', $campo1);    
        $totalorden = count($ordenFicha);
        //Este campoa concatenara las referencias que se vayan armando en el ciclo
        $campoa = '';        
        //Vamos a crear un array en donde se iran almacenando los id de las tablas a medida que se van creando las referencias         
        $campopinta = array();
                
        /*
         * ExplicaciÃ³n del siguiente codigo:
         * Este es un ciclo dinamico. Como solo hay 5 tablas, entonces vamos a quemar el ciclo como string y la ejecutaremos con la funcion
         * eval. El campo ordenFicha[$i], es el que almacena el nombre de las variables de tablas. (Pinta, FichaTecnicaColorTela, Color, 
         * Talla, TallaComplemento). El total variantes es el total de combinaciones que se pueden crear.         
         */
        
        for($i=0;$i<$totalorden;$i++)
        {
            $codigoTabla = '$codigo'.$ordenFicha[$i];
            $codigoTablatot = '$total'.$ordenFicha[$i].'F';
            $estructura = '
            //print_r('.$codigoTabla.');
            //echo \'<br>\';
            //echo $total'.$ordenFicha[$i].'F;
            for($z = 0 ; $z < $total'.$ordenFicha[$i].'F; $z++)
            {';
                //Si solo hay una tabla, para armar las referencias
                if($totalvariante == 1)
                {
                    //echo '<br> 1 <br>';
                    /* La variable $tabla, reemplazara FichaTecnicaColorTela_FichaTecnicaColorTela por Color_idColor, ya que en la vista de producto no 
                     * no existe. Si en el esquema no encuentra FichaTecnicaColorTela, dejara el nombre de la variable por defecto.
                     */
                    $tabla = ($ordenFicha[$i] == 'FichaTecnicaColorTela' ? 'Color' : $ordenFicha[$i]);        
                    
                    $estructura .= '$campoa .= $codigo'.$ordenFicha[$i].'[$z].",";';
                    $estructura .= '$campopinta["'.$ordenFicha[$i].'"][] = (isset($'.$ordenFicha[$i].'[$z]) ? $'.$ordenFicha[$i].'[$z] : 0);';
                    $estructura .= '$prod = $producto->ConsultarVistaProducto("FichaTecnica_idFichaTecnica = ".$idFichaTecnica. 
                                                        " and '.$tabla.'_id'.$tabla.' = ".(isset($'.$ordenFicha[$i].'[$z]) ? $'.$ordenFicha[$i].'[$z] : 0),
                                                        "");';
                }
                else
                {
                    //echo '<br>1.1<br>';
                    $estructura .= '
                    //print_r('.$codigoTabla.');
                    //echo \'<br>\';
                    //echo $total'.$ordenFicha[$i+1].'F;
                    
                    for($y = 0 ; $y < $total'.$ordenFicha[$i+1].'F; $y++)
                    {';
                    if($totalvariante == 2)
                    {
                        //echo ' 2 ';
                        $tabla = ($ordenFicha[$i] == 'FichaTecnicaColorTela' ? 'Color' : $ordenFicha[$i]);
                        $tabla1 = ($ordenFicha[$i+1] == 'FichaTecnicaColorTela' ? 'Color' : $ordenFicha[$i+1]);
                      //  echo $tabla1;
                       
                        $estructura .= '$campoa .= $codigo'.$ordenFicha[$i].'[$z];';
                        $estructura .= '$campoa .= $codigo'.$ordenFicha[$i+1].'[$y].",";';
                        
                        $estructura .= '$campopinta["'.$ordenFicha[$i].'"][] = (isset($'.$ordenFicha[$i].'[$z]) ? $'.$ordenFicha[$i].'[$z] : 0);';
                        $estructura .= '$campopinta["'.$ordenFicha[$i+1].'"][] = (isset($'.$ordenFicha[$i+1].'[$y]) ? $'.$ordenFicha[$i+1].'[$y] : 0);';
                        
                        
                        $estructura .= '$prod = $producto->ConsultarVistaProducto("FichaTecnica_idFichaTecnica = ".$idFichaTecnica. 
                                                        " and '.$tabla.'_id'.$tabla.' = ".(isset($'.$ordenFicha[$i].'[$z]) ? $'.$ordenFicha[$i].'[$z] : 0).
                                                        " and '.$tabla1.'_id'.$tabla1.' = ".(isset($'.$ordenFicha[$i+1].'[$y]) ? $'.$ordenFicha[$i+1].'[$y] : 0)
                                                        ,""); ';
                    }
                    else
                    {
                        //echo '<br> 2.1 <br>';
                        $estructura .= '
                        //print_r('.$codigoTabla.');
                        //echo \'<br>\';
                        //echo $total'.$ordenFicha[$i+2].'F;
                        for($x = 0 ; $x < $total'.$ordenFicha[$i+2].'F; $x++)
                        {';
                        if($totalvariante == 3)
                        {
                            //echo ' 3 ';
                            $tabla = ($ordenFicha[$i] == 'FichaTecnicaColorTela' ? 'Color' : $ordenFicha[$i]);
                            $tabla1 = ($ordenFicha[$i+1] == 'FichaTecnicaColorTela' ? 'Color' : $ordenFicha[$i+1]);
                            $tabla2 = ($ordenFicha[$i+2] == 'FichaTecnicaColorTela' ? 'Color' : $ordenFicha[$i+2]);
                            
                            $estructura .= '$campoa .= $codigo'.$ordenFicha[$i].'[$z];';
                            $estructura .= '$campoa .= $codigo'.$ordenFicha[$i+1].'[$y];';
                            $estructura .= '$campoa .= $codigo'.$ordenFicha[$i+2].'[$x].",";';
                            
                            $estructura .= '$campopinta["'.$ordenFicha[$i].'"][] = (isset($'.$ordenFicha[$i].'[$z]) ? $'.$ordenFicha[$i].'[$z] : 0);';
                            $estructura .= '$campopinta["'.$ordenFicha[$i+1].'"][] = (isset($'.$ordenFicha[$i+1].'[$y]) ? $'.$ordenFicha[$i+1].'[$y] : 0);';
                            $estructura .= '$campopinta["'.$ordenFicha[$i+2].'"][] = (isset($'.$ordenFicha[$i+2].'[$x]) ? $'.$ordenFicha[$i+2].'[$x] : 0);';
                            
                            $estructura .= '$prod = $producto->ConsultarVistaProducto("FichaTecnica_idFichaTecnica = ".$idFichaTecnica. 
                                                        " and '.$tabla.'_id'.$tabla.' = ".(isset($'.$ordenFicha[$i].'[$z]) ? $'.$ordenFicha[$i].'[$z] : 0).
                                                        " and '.$tabla1.'_id'.$tabla1.' = ".(isset($'.$ordenFicha[$i+1].'[$y]) ? $'.$ordenFicha[$i+1].'[$y] : 0).
                                                        " and '.$tabla2.'_id'.$tabla2.' = ".(isset($'.$ordenFicha[$i+2].'[$x]) ? $'.$ordenFicha[$i+2].'[$x] : 0)
                                                        ,"");';
                        }
                        else
                        {
                            //echo '<br> 3.1 <br>';
                            $estructura .= '
                            //print_r('.$codigoTabla.');
                            //echo \'<br>\';
                            //echo $total'.$ordenFicha[$i+3].'F;
                            for($w = 0 ; $w < $total'.$ordenFicha[$i+3].'F; $w++)
                            {';
                            if($totalvariante == 4)
                            {
                                //echo ' 4 ';
                                $tabla = ($ordenFicha[$i] == 'FichaTecnicaColorTela' ? 'Color' : $ordenFicha[$i]);
                                $tabla1 = ($ordenFicha[$i+1] == 'FichaTecnicaColorTela' ? 'Color' : $ordenFicha[$i+1]);
                                $tabla2 = ($ordenFicha[$i+2] == 'FichaTecnicaColorTela' ? 'Color' : $ordenFicha[$i+2]);
                                $tabla3 = ($ordenFicha[$i+3] == 'FichaTecnicaColorTela' ? 'Color' : $ordenFicha[$i+3]);
                                
                                $estructura .= '$campoa .= $codigo'.$ordenFicha[$i].'[$z];';
                                $estructura .= '$campoa .= $codigo'.$ordenFicha[$i+1].'[$y];';
                                $estructura .= '$campoa .= $codigo'.$ordenFicha[$i+2].'[$x];';
                                $estructura .= '$campoa .= $codigo'.$ordenFicha[$i+3].'[$w].",";';
                                
                                $estructura .= '$campopinta["'.$ordenFicha[$i].'"][] = (isset($'.$ordenFicha[$i].'[$z]) ? $'.$ordenFicha[$i].'[$z] : 0);';
                                $estructura .= '$campopinta["'.$ordenFicha[$i+1].'"][] = (isset($'.$ordenFicha[$i+1].'[$y]) ? $'.$ordenFicha[$i+1].'[$y] : 0);';
                                $estructura .= '$campopinta["'.$ordenFicha[$i+2].'"][] = (isset($'.$ordenFicha[$i+2].'[$x]) ? $'.$ordenFicha[$i+2].'[$x] : 0);';
                                $estructura .= '$campopinta["'.$ordenFicha[$i+3].'"][] = (isset($'.$ordenFicha[$i+3].'[$w]) ? $'.$ordenFicha[$i+3].'[$w] : 0);';
                                
                                $estructura .= '$prod = $producto->ConsultarVistaProducto("FichaTecnica_idFichaTecnica = ".$idFichaTecnica. 
                                                        " and '.$tabla.'_id'.$tabla.' = ".(isset($'.$ordenFicha[$i].'[$z]) ? $'.$ordenFicha[$i].'[$z] : 0).
                                                        " and '.$tabla1.'_id'.$tabla1.' = ".(isset($'.$ordenFicha[$i+1].'[$y]) ? $'.$ordenFicha[$i+1].'[$y] : 0).
                                                        " and '.$tabla2.'_id'.$tabla2.' = ".(isset($'.$ordenFicha[$i+2].'[$x]) ? $'.$ordenFicha[$i+2].'[$x] : 0).
                                                        " and '.$tabla3.'_id'.$tabla3.' = ".(isset($'.$ordenFicha[$i+3].'[$w]) ? $'.$ordenFicha[$i+3].'[$w] : 0)
                                                        ,"");';
                            }
                            else
                            {
                                //echo '<br> 4.1 <br>';
                                $estructura .= '
                                //print_r('.$codigoTabla.');
                                //echo \'<br>\';
                                //echo $total'.$ordenFicha[$i+4].'F;
                                for($v = 0 ; $v < $total'.$ordenFicha[$i+4].'F; $v++)
                                {';
                                    $tabla = ($ordenFicha[$i] == 'FichaTecnicaColorTela' ? 'Color' : $ordenFicha[$i]);
                                    $tabla1 = ($ordenFicha[$i+1] == 'FichaTecnicaColorTela' ? 'Color' : $ordenFicha[$i+1]);
                                    $tabla2 = ($ordenFicha[$i+2] == 'FichaTecnicaColorTela' ? 'Color' : $ordenFicha[$i+2]);
                                    $tabla3 = ($ordenFicha[$i+3] == 'FichaTecnicaColorTela' ? 'Color' : $ordenFicha[$i+3]);
                                    $tabla4 = ($ordenFicha[$i+4] == 'FichaTecnicaColorTela' ? 'Color' : $ordenFicha[$i+4]);
                                    
                                    $estructura .= '$campoa .= $codigo'.$ordenFicha[$i].'[$z];';
                                    $estructura .= '$campoa .= $codigo'.$ordenFicha[$i+1].'[$y];';
                                    $estructura .= '$campoa .= $codigo'.$ordenFicha[$i+2].'[$x];';
                                    $estructura .= '$campoa .= $codigo'.$ordenFicha[$i+3].'[$w];';
                                    $estructura .= '$campoa .= $codigo'.$ordenFicha[$i+4].'[$v].",";';
                                    
                                    $estructura .= '$campopinta["'.$ordenFicha[$i].'"][] = (isset($'.$ordenFicha[$i].'[$z]) ? $'.$ordenFicha[$i].'[$z] : 0);';
                                    $estructura .= '$campopinta["'.$ordenFicha[$i+1].'"][] = (isset($'.$ordenFicha[$i+1].'[$y]) ? $'.$ordenFicha[$i+1].'[$y] : 0);';
                                    $estructura .= '$campopinta["'.$ordenFicha[$i+2].'"][] = (isset($'.$ordenFicha[$i+2].'[$x]) ? $'.$ordenFicha[$i+2].'[$x] : 0);';
                                    $estructura .= '$campopinta["'.$ordenFicha[$i+3].'"][] = (isset($'.$ordenFicha[$i+3].'[$w]) ? $'.$ordenFicha[$i+3].'[$w] : 0);';
                                    $estructura .= '$campopinta["'.$ordenFicha[$i+4].'"][] = (isset($'.$ordenFicha[$i+4].'[$v]) ? $'.$ordenFicha[$i+4].'[$v] : 0);';
                                    
                                    $estructura .= '$prod = $producto->ConsultarVistaProducto("FichaTecnica_idFichaTecnica = ".$idFichaTecnica. 
                                                        " and '.$tabla.'_id'.$tabla.' = ".(isset($'.$ordenFicha[$i].'[$z]) ? $'.$ordenFicha[$i].'[$z] : 0).
                                                        " and '.$tabla1.'_id'.$tabla1.' = ".(isset($'.$ordenFicha[$i+1].'[$y]) ? $'.$ordenFicha[$i+1].'[$y] : 0).
                                                        " and '.$tabla2.'_id'.$tabla2.' = ".(isset($'.$ordenFicha[$i+2].'[$x]) ? $'.$ordenFicha[$i+2].'[$x] : 0).
                                                        " and '.$tabla3.'_id'.$tabla3.' = ".(isset($'.$ordenFicha[$i+3].'[$w]) ? $'.$ordenFicha[$i+3].'[$w] : 0).
                                                        " and '.$tabla4.'_id'.$tabla4.' = ".(isset($'.$ordenFicha[$i+4].'[$v]) ? $'.$ordenFicha[$i+4].'[$v] : 0)
                                                        ,"");';
                                $estructura .='}';
                            }
                            $estructura .= '}';
                        }
                        $estructura .= '}';
                    }
                    $estructura .= '}';
                }
            $estructura .= '}';
            $estructura .= '$campoa = substr($campoa, 0, -1);';
            $i = $totalorden;
            //echo $estructura;            
            eval($estructura);
        } 
//        echo "<br>campoa: ".$campoa."<br>";
        $refcampoa = explode(',', $campoa);     
        $totalcampoa = count($refcampoa);
//        echo '<pre> prod Dinamico: <br>';
//        print_r($prod);
//        echo '</pre>';    
//        echo '<pre>';
//        print_r($refcampoa);
//        echo '</pre>';
//        print_r($Talla);
//        print_r($Color);
//    echo '<br>cantidad '.$totalcampoa.'<br>';
//        echo '</pre>';
        
        
        
        for($o=0;$o<$totalcampoa;$o++)
        {

            
//            $prod = $producto->ConsultarVistaProducto("FichaTecnica_idFichaTecnica = ".$idFichaTecnica. 
//                                         " and referenciaProducto = ".$refcampoa[$o], "");     
            
                    // buscamos si ya existe un producto asociado a la ficha tecnica con el mismo color y talla
                    $prod = $producto->ConsultarVistaProducto("FichaTecnica_idFichaTecnica = ".$idFichaTecnica. 
                                                        " and Color_idColor = ".(isset($campopinta['Color']) ? $campopinta['Color'][$o] : $campopinta['FichaTecnicaColorTela'][$o]).
                                                        " and Talla_idTalla = ".(isset($campopinta['Talla']) ? $campopinta['Talla'][$o] : 0).
                                                        " and TallaComplemento_idTallaComplemento = ".(isset($campopinta['TallaComplemento'][$o]) ? $campopinta['TallaComplemento'][$o] : 0).
                                                        " and Pinta_idPinta = ".(isset($campopinta['Pinta'][$o]) ? $campopinta['Pinta'][$o] : 0),
                                                        "");
                   //si existe el id de la pinta consultamos el color predominante para asignarlo al producto
                    if(isset($campopinta['Pinta'][$o])){
                    $sql = "select ftp.Predominante_idColor as Predominante_idColor
                         from FichaTecnicaPinta ftp
                         left join FichaTecnica ft
                         on ftp.FichaTecnica_idFichaTecnica = ft.idFichaTecnica
                         left join Pinta p
                         on ftp.Pinta_idPinta = p.idPinta where idFichaTecnica = ".$idFichaTecnica." and p.codigoAlternoPinta = ".trim($refcampoa[$o])." "
                       . "and ftp.Pinta_idPinta =".$campopinta['Pinta'][$o];  
                    $datospintados = $bd->ConsultarVista($sql);
                    }
//                    echo "sql: ".$sql."<br>";
//                    echo "<br>datos de las consulta: ".$datospintados[0]["Predominante_idColor"]."<br>";
		    // llenamos los campos con los datos del formulario de ficha
                    $producto->idProducto = 0;
                    $producto->codigoAlternoProducto = trim($datoficha[0]["referenciaBaseFichaTecnica"]); 
                    $producto->referenciaProducto = trim($datoficha[0]["referenciaBaseFichaTecnica"]).
                                                    trim($datosVariantes[0]['separadorEsquemaProducto'])  . 
                                                    trim($refcampoa[$o]);
                    $producto->nombreLargoProducto = $datoficha[0]["nombreLargoFichaTecnica"];
                    $producto->nombreCortoProducto = $datoficha[0]["nombreCortoFichaTecnica"];
                    $producto->precioProducto = $datoficha[0]["precioFichaTecnica"];
                    $producto->costoEstandarProducto = $datoficha[0]["costoFichaTecnica"];
                    $producto->ivaIncluidoProducto = $datoficha[0]["ivaIncluidoFichaTecnica"];
                    $producto->acumulaPuntosProducto = $datoficha[0]["acumulaPuntosFichaTecnica"];
                    $producto->redimePuntosProducto = $datoficha[0]["redimePuntosFichaTecnica"];
                    $producto->fechaCreacionProducto = date("Y-m-d");
                    $producto->estadoProducto = 'ACTIVO';
                    //$producto->clasificacionProducto = '*01*';
                   // $producto->clasificacionProducto = ($tipoFicha == 'P' ? '*01*' : '*02*');
                    
                    //Esto solo aplica para tela
                    switch ($tipoFicha)
                    {
                        case 'P':
                           $producto->clasificacionProducto = '*01*';  
                            break;
                        case 'I':
                           $producto->clasificacionProducto = '*02*';  
                            break;
                        case 'T':
                            if($datoficha[0]["productoTerminadoFichaTecnica"]==1 && $datoficha[0]["materiaPrimaFichaTecnica"]==1) 
                            {
                               $producto->clasificacionProducto = '*01**02*';  
                            }
                            else
                            {
                                if($datoficha[0]["productoTerminadoFichaTecnica"]==1) 
                                {
                                    $producto->clasificacionProducto = '*01*'; 
                                }
                                else
                                {
                                    $producto->clasificacionProducto = '*02*'; 
                                }
                            }
                        case 'H':
                            if($datoficha[0]["productoTerminadoFichaTecnica"]==1 && $datoficha[0]["materiaPrimaFichaTecnica"]==1) 
                            {
                               $producto->clasificacionProducto = '*01**02*';  
                            }
                            else
                            {
                                if($datoficha[0]["productoTerminadoFichaTecnica"]==1) 
                                {
                                    $producto->clasificacionProducto = '*01*'; 
                                }
                                else
                                {
                                    $producto->clasificacionProducto = '*02*'; 
                                }
                            }    
                            break;
                    }
                    //condicion necesaria para asignar el color al producto si es fundo entero p preteñido.
                    if((isset($campopinta['Color']) ? $campopinta['Color'][$o] : $campopinta['FichaTecnicaColorTela'][$o]))
                    {
                        $producto->Color_idColor = (isset($campopinta['Color']) ? $campopinta['Color'][$o] : $campopinta['FichaTecnicaColorTela'][$o]);
                    }else 
                    {   
                        $producto->Color_idColor = (isset($datospintados[0]["Predominante_idColor"]) ? $datospintados[0]["Predominante_idColor"] : 0);
                    }
//                    echo "<br>consicion colo: ".(isset($campopinta['Color']) ? $campopinta['Color'][$o] : $campopinta['FichaTecnicaColorTela'][$o]);
//                    echo "<br>condicion pintacolor: ".(isset($datospintados[0]["Predominante_idColor"]) ? $datospintados[0]["Predominante_idColor"] : 0);
//                    echo "<br>Color Producto: ".$producto->Color_idColor;
                    $producto->Talla_idTalla = (isset($campopinta['Talla']) ? $campopinta['Talla'][$o] : 0);
                    $producto->TallaComplemento_idTallaComplemento = (isset($campopinta['TallaComplemento'][$o]) ? $campopinta['TallaComplemento'][$o] : 0);
                    $producto->FichaTecnica_idFichaTecnica = $idFichaTecnica;
                    $producto->nombreColorEspecialProducto = $nombreColorEspecialProducto[$o];                
                    $producto->cantidadContenidaProducto = 0;
                    $producto->Tercero_idCliente =  $datoficha[0]["Tercero_idCliente"];
                    $producto->Marca_idMarca = $datoficha[0]["Marca_idMarca"];
                    $producto->Pais_idPaisOrigen = $datoficha[0]["Pais_idPais"];
                    $producto->DescripcionBase_idDescripcionBase = $datoficha[0]["DescripcionBase_idDescripcionBase"]."<br>";
                    $producto->ConstruccionHilo_idContruccionHilo = $datoficha[0]["ConstruccionHilo_idContruccionHilo"];
                    $producto->EstadoConservacion_idEstadoConservacion =  $datoficha[0]["EstadoConservacion_idEstadoConservacion"];
                    $producto->TipoProducto_idTipoProducto =  $datoficha[0]["TipoProducto_idTipoProducto"];
                    $producto->TipoNegocio_idTipoNegocio =  $datoficha[0]["TipoNegocio_idTipoNegocio"];
                    $producto->Temporada_idTemporada = $datoficha[0]["Temporada_idTemporada"];
                    $producto->Composicion_idComposicion = $datoficha[0]["Composicion_idComposicion"];
                    $producto->Categoria_idCategoria =  $datoficha[0]["Categoria_idCategoria"];
                    $producto->CaracteristicasHilaza_idCaracteristicasHilaza =  $datoficha[0]["CaracteristicasHilaza_idCaracteristicasHilaza"];
                    $producto->UnidadMedida_idCompra =  $datoficha[0]["UnidadMedida_idCompra"];
                    $producto->UnidadMedida_idVenta =  $datoficha[0]["UnidadMedida_idVenta"];
                    $producto->Clima_idClima = $datoficha[0]["Clima_idClima"];
                    $producto->Difusion_idDifusion = $datoficha[0]["Difusion_idDifusion"];
                    $producto->Estrategia_idEstrategia = $datoficha[0]["Estrategia_idEstrategia"];
                    $producto->Evento_idEvento = $datoficha[0]["Evento_idEvento"];
                    $producto->PosicionArancelaria_idPosicionArancelaria = $datoficha[0]["PosicionArancelaria_idPosicionArancelaria"];
                    $producto->Seccion_idSeccion = $datoficha[0]["Seccion_idSeccion"];
                    $producto->ClienteObjetivo_idClienteObjetivo =  $datoficha[0]["ClienteObjetivo_idClienteObjetivo"];
                    $producto->SegmentoOperacion_idSegmentoOperacion =  $datoficha[0]["SegmentoOperacion_idSegmentoOperacion"];
                    $producto->EsquemaProducto_idEsquemaProducto =  $datoficha[0]["EsquemaProducto_idEsquemaProducto"];
                    
                    

                    //PAra logistica
                    $producto->pesoBrutoProducto = $datoficha[0]["pesoBrutoFichaTecnica"];
                    $producto->pesoNetoProducto = $datoficha[0]["pesoNetoFichaTecnica"];
                    $producto->altoProducto = $datoficha[0]["altoFichaTecnica"];
                    $producto->anchoProducto = $datoficha[0]["anchoFichaTecnica"];
                    $producto->profundidadProducto = $datoficha[0]["profundidadFichaTecnica"];
                    $producto->diasReposicionProducto = $datoficha[0]["diasReposicionFichaTecnica"];
                    $producto->puntoPedidoProducto = $datoficha[0]["puntoPedidoFichaTecnica"];
                    $producto->cantidadSeguridadProducto = $datoficha[0]["cantidadSeguridadFichaTecnica"];
                    $producto->stockMinimoProducto = $datoficha[0]["stockMinimoFichaTecnica"];
                    $producto->stockMaximoProducto = $datoficha[0]["stockMaximoFichaTecnica"];
                    
                    
                    
                  //Aqui van kos 3 Tela
                  //  $producto->Tono_idTono = $datoficha[0]['Tono_idTono'];
                    $producto->Pinta_idPinta = (isset($campopinta['Pinta'][$o]) ? $campopinta['Pinta'][$o] : 0);
                    $producto->CalibreHilo_idCalibreHilo = $datoficha[0]['CalibreHilo_idCalibreHilo'];
                    
                    
                    //Si en esuqemas de producto tiene el chulo de generar codigo de barras se debe llamar a la funcion, sino se manda vacio
                    if($datosVariantes[0]["generaCodigoBarrasEsquemaProducto"] == 1)
                    {
                        // generamos el codigo de barras del producto
                        $producto->codigoBarrasProducto = $codigobarras->GenerarCodigoBarras($producto->Tercero_idCliente);
                    }
                    else
                    {
                        $producto->codigoBarrasProducto = '';
                    }

                                    //echo ('isfcha '.$idFichaTecnica. ' idproducto '.$prod[0]["idProducto"]);
                    // si el producto ya existe en el modulo comercial, rescatamos los datos generales que ya tiene grabados por si los han modificado

                    //mirar si en esta parte se debe adicionar la condicion || $existe>o (para que pueda modificar la referncia que ya existe, p ero adicionando en esta parte que lleve el is de ficha)
                    if(isset($prod[0]["idProducto"]))
                    {	                    
                      //  echo '<br>prod<br>';
                        
                        
                        $producto->idProducto = $prod[0]["idProducto"];
                        $producto->referenciaProducto = $prod[0]["referenciaProducto"];
//                        $producto->nombreLargoProducto = $prod[0]["nombreLargoProducto"];
//                        $producto->nombreCortoProducto = $prod[0]["nombreCortoProducto"];
                        $producto->fechaCreacionProducto = $prod[0]["fechaCreacionProducto"];
                        $producto->estadoProducto = $prod[0]["estadoProducto"];
                        $producto->clasificacionProducto = $prod[0]["clasificacionProducto"];
                        $producto->codigoBarrasProducto = ($prod[0]["codigoBarrasProducto"] == '' ? $producto->codigoBarrasProducto : $prod[0]["codigoBarrasProducto"]);

                        /*// los campos que se modifican en el detalle de productos, se deben llenar con el datos correspondiente a su talla y Color
                        // buscamos la talla y el color en los arrays de la pestaï¿½a de productos para saber el offset de la linea
                        $colores = $_POST['Producto_idColor'];
                        $tallas = $_POST['Producto_idTalla'];
                        $barras = $_POST['codigoBarrasProducto'];
                        $refclien = $_POST['referenciaClienteProducto'];
                        $refprov = $_POST['referenciaProveedorProducto'];
                        $codalter = $_POST["codigoAlternoProducto"];

                        $totalreg = count($colores);
                        for($reg = 0 ; $reg < $totalreg; $reg++)
                        {							
                            if($colores[$reg] == $fichatecnica->Color_idColor[$col] and $tallas[$reg] == $fichatecnica->Talla_idTalla[$tal])
                            {
                                $producto->codigoBarrasProducto = $barras[$reg];
                                $producto->referenciaClienteProducto = $refclien[$reg];
                                $producto->referenciaProveedorProducto = $refprov[$reg];
                                $producto->codigoAlternoProducto = $codalter[$reg];
                            }
                        }*/

                        // Actualizamos la informaciï¿½nn del producto
                        $producto->ModificarProductoFichaTecnica() ;
                        //echo 'MODIFICO';
                    }
                    else
                    {
                        $referencia = $producto->ConsultarVistaProducto("referenciaProducto = '".$producto->referenciaProducto."'",
                                                                    "");
                          //echo '<br>ref<br>';
                        
                        //si la referencia ya estÃ¡ cerada, pero no tiene Ficha tecnica asociada se modifica y se le adiciona la FT
                        if(isset($referencia[0]["idProducto"]))
                        {                     
                          // echo '<br>referencia<br>';
                            $producto->idProducto = $referencia[0]["idProducto"];
                            $producto->referenciaProducto = $referencia[0]["referenciaProducto"];
                            $producto->nombreLargoProducto = $referencia[0]["nombreLargoProducto"];
                            $producto->nombreCortoProducto = $referencia[0]["nombreCortoProducto"];
                            $producto->fechaCreacionProducto = $referencia[0]["fechaCreacionProducto"];
                            $producto->estadoProducto = $referencia[0]["estadoProducto"];
                            $producto->clasificacionProducto = $referencia[0]["clasificacionProducto"];
                            $producto->codigoBarrasProducto = ($referencia[0]["codigoBarrasProducto"] == '' ? $producto->codigoBarrasProducto : $referencia[0]["codigoBarrasProducto"]);
                            
                            $producto->ModificarProductoFichaTecnica() ;
                        }
                        else
                        {
                            /*
                            // los campos que se modifican en el detalle de productos, se deben llenar con el datos correspondiente a su talla y Color
                            // buscamos la talla y el color en los arrays de la pestaï¿½a de productos para saber el offset de la linea
                            $colores = $_POST['Color_idColor'];
                            $tallas = $_POST['Talla_idTalla'];
                            $barras = $_POST['codigoBarrasProducto'];
                            $refclien = $_POST['referenciaClienteProducto'];
                            $refprov = $_POST['referenciaProveedorProducto'];
                            $codalter = $_POST["codigoAlternoProducto"];

                            $totalreg = count($colores);
                            for($reg = 0 ; $reg < $totalreg; $reg++)
                            {							
                                if( (isset($colores[$reg]) and  $colores[$reg] == $fichatecnica->Color_idColor[$col]) and 
                                    (isset($tallas[$reg]) and  $tallas[$reg] == $fichatecnica->Talla_idTalla[$tal]))
                                {
                                    $producto->codigoBarrasProducto = $barras[$reg];
                                    $producto->referenciaClienteProducto = $refclien[$reg];
                                    $producto->referenciaProveedorProducto = $refprov[$reg];
                                    $producto->codigoAlternoProducto = $codalter[$reg];
                                }
                                else 
                                {
                                    $producto->codigoBarrasProducto = '';
                                    $producto->referenciaClienteProducto = '';
                                    $producto->referenciaProveedorProducto = '';
                                    $producto->codigoAlternoProducto = '';
                                }
                            }*/                             
                            // Adicionamos la informaciï¿½nn del producto
                            $producto->AdicionarProductoFichaTecnica();
                            $producto->AdicionarImpuestoRetencionProductoFichaTecnica();					
                        }
                    }
        }
		//echo ('ingresa a aprobado');
		// cambiamos el estado de la ficha tÃ©cnica por aprobado
	
//		$sql = "update FichaTecnica
//				set estadoFichaTecnica = 'APROBADO'
//				where idFichaTecnica = $idFichaTecnica";
//		$bd = Db::getInstance();
//		$query = $bd->ejecutar($sql); 

		return 1;	
	}
    }
    
    
    function AdicionarFichaTecnicaCostoEstandarImagen() 
    { 
        $totinsert = isset($this->idFichaTecnicaCostoEstandarImagen[0]) ? count($this->idFichaTecnicaCostoEstandarImagen) : 0;
//      echo '<br><br>'.'cantidad total imagene '.$totinsert.'<br><br>';
        
		$sql="insert into FichaTecnicaCostoEstandarImagen(
					idFichaTecnicaCostoEstandarImagen,
                    FichaTecnica_idFichaTecnica,
					codigoAlternoFichaTecnicaCostoEstandarImagen,
					nombreFichaTecnicaCostoEstandarImagen,
					imagenFichaTecnicaCostoEstandarImagen,
					observacionFichaTecnicaCostoEstandarImagen)
				  values ";
                                    
                for ($item = 0; $item < $totinsert; $item++) 
                {  
                    
                    $sql .= "('".$this->idFichaTecnicaCostoEstandarImagen[$item]."', ".
						  "'".$this->idFichaTecnica."', ".
						  "'".$this->codigoAlternoFichaTecnicaCostoEstandarImagen[$item]."', ".
						  "'".$this->nombreFichaTecnicaCostoEstandarImagen[$item]."', ".
						  "'".$this->imagenFichaTecnicaCostoEstandarImagen[$item]."', ".
						  "'".$this->observacionFichaTecnicaCostoEstandarImagen[$item]."')".
                    (($item != ($totinsert - 1)) ? ',' : ';');
                }
                
		/*Ejecutamos la query*/ 
		//echo('ingresa adicionar imagen');
		//echo $sql;
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
        
		return $query;
    } // fin de operacion Adicionar imagenes
    
    function EliminarFichaTecnicaCostoEstandarImagen($Condicion='') 
    { 

		if(!empty($Condicion))
		{
			$Condicion = 'where '. $Condicion;
		}
		
		/*Creamos una query sencilla*/ 
		$sql = "delete 
				from FichaTecnicaCostoEstandarImagen ". $Condicion; 

		/*Ejecutamos la query*/ 
		
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
		return $query;
    } 
    
    function ConsultarVistaFichaTecnicaCostoEstandarImagenes($Condicion = '', $orden = '') 
    { 
		if(!empty($Condicion))
		{
			$Condicion = ' where '. $Condicion;
		}
		if(!empty($orden))
		{
			$orden = ' order by '. $orden;
		}
		/*Creamos una query sencilla*/ 
		$sql = "select * 
				from viewFichaTecnicaCostoEstandarImagenes ".$Condicion.$orden;
				 
        //ECHO '<BR>'.$sql.'<br><br>';
		/*Ejecutamos la query*/ 
		$bd = Db::getInstance();
		$query = $bd->ejecutar($sql); 
		$datos = array();
		$i = 0;
		if ($query)
		{
			/*Realizamos un bucle para ir obteniendo los resultados */
			while ($registro = $bd->obtener_fila($query,0))
			{ 
				$datos[$i] = $registro;
				$i++;
			}
		}
		return $datos; 
	}	
}
?>
