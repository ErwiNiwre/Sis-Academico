<?php

use Illuminate\Database\Seeder;

class AcademicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('roles')->insert([
            ['id' => '1', 'rol' => 'ADMINISTRADOR', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '2', 'rol' => 'RECTOR', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '3', 'rol' => 'DIRECTOR ACADEMICO', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '4', 'rol' => 'SECRETARIA', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '5', 'rol' => 'DOCENTE', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '6', 'rol' => 'ESTUDIANTE', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '7', 'rol' => 'POSTULANTES', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
        ]);

        DB::table('departamentos')->insert([
            ['id' => '1', 'departamento' => 'LA PAZ', 'abreviatura' => 'LP', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '2', 'departamento' => 'ORURO', 'abreviatura' => '0R', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '3', 'departamento' => 'COCHABAMBA', 'abreviatura' => 'CB', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '4', 'departamento' => 'SANTA CRUZ', 'abreviatura' => 'SC', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '5', 'departamento' => 'BENI', 'abreviatura' => 'BN', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '6', 'departamento' => 'PANDO', 'abreviatura' => 'PA', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '7', 'departamento' => 'CHUQUISACA', 'abreviatura' => 'CH', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '8', 'departamento' => 'TARIJA', 'abreviatura' => 'TJ', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '9', 'departamento' => 'POTOSI', 'abreviatura' => 'PT', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
        ]);

        DB::table('carreras')->insert([
            ['id' => '1', 'carrera' => 'CONTADURÍA GENERAL', 'nivelAcademico' => 'TÉCNICO SUPERIOR', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '2', 'carrera' => 'SECRETARIADO EJECUTIVO', 'nivelAcademico' => 'TÉCNICO SUPERIOR', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '3', 'carrera' => 'SISTEMAS INFORMÁTICOS', 'nivelAcademico' => 'TÉCNICO SUPERIOR', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '4', 'carrera' => 'ADMINISTRACIÓN DE EMPRESAS', 'nivelAcademico' => 'TÉCNICO SUPERIOR', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '5', 'carrera' => 'COMERCIO EXTERIOR', 'nivelAcademico' => 'TÉCNICO SUPERIOR', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '6', 'carrera' => 'LINGÜÍSTICA', 'nivelAcademico' => 'TÉCNICO SUPERIOR', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
        ]);

        DB::table('paralelos')->insert([
            ['id' => '1', 'paralelo' => 'A', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '2', 'paralelo' => 'B', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '3', 'paralelo' => 'C', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '4', 'paralelo' => 'D', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '5', 'paralelo' => 'E', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '6', 'paralelo' => 'F', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
        ]);

        DB::table('turnos')->insert([
            ['id' => '1', 'turno' => 'MAÑANA', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '2', 'turno' => 'NOCHE', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
        ]);

        DB::table('horas')->insert([
            ['id' => '1', 'hora' => '08:00', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '2', 'hora' => '09:30', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '3', 'hora' => '11:00', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '4', 'hora' => '11:15', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '5', 'hora' => '12:45', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '6', 'hora' => '19:00', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '7', 'hora' => '20:00', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '8', 'hora' => '21:00', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '9', 'hora' => '21:15', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '10', 'hora' => '10:15', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
        ]);

        DB::table('niveles')->insert([
            ['id' => '1', 'numeral' => '1ro', 'literal' => 'PRIMERO', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '2', 'numeral' => '2do', 'literal' => 'SEGUNDO', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '3', 'numeral' => '3ro', 'literal' => 'TERCERO', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '4', 'numeral' => '4to', 'literal' => 'CUARTO', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '5', 'numeral' => '5to', 'literal' => 'QUINTO', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '6', 'numeral' => '6to', 'literal' => 'SEXTO', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
        ]);

        DB::table('aulas')->insert([
            ['id' => '1', 'aula' => 'Laboratorio 1', 'ubicacion' => 'Tercer Piso', 'capacidad' => '35', 'carrera_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '2', 'aula' => 'Laboratorio 2', 'ubicacion' => 'Tercer Piso', 'capacidad' => '30', 'carrera_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '3', 'aula' => 'Laboratorio 3', 'ubicacion' => 'Tercer Piso', 'capacidad' => '35', 'carrera_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '4', 'aula' => 'Laboratorio 4', 'ubicacion' => 'Tercer Piso', 'capacidad' => '25', 'carrera_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '5', 'aula' => 'Laboratorio 5', 'ubicacion' => 'Cuarto Piso', 'capacidad' => '35', 'carrera_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '6', 'aula' => 'Laboratorio 6', 'ubicacion' => 'Cuarto Piso', 'capacidad' => '30', 'carrera_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
        ]);

        DB::table('periodos')->insert([
            ['id' => '1', 'numeral' => '1er', 'literal' => 'PRIMER', 'periodo' => 'TRIMESTRE', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '2', 'numeral' => '2do', 'literal' => 'SEGUNDO', 'periodo' => 'TRIMESTRE', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '3', 'numeral' => '3er', 'literal' => 'TERCER', 'periodo' => 'TRIMESTRE', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '4', 'numeral' => '1er', 'literal' => 'PRIMER', 'periodo' => 'BIMESTRE', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '5', 'numeral' => '2do', 'literal' => 'SEGUNDO', 'periodo' => 'BIMESTRE', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '6', 'numeral' => '3er', 'literal' => 'TERCER', 'periodo' => 'BIMESTRE', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '7', 'numeral' => '4to', 'literal' => 'CUARTO', 'periodo' => 'BIMESTRE', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
        ]);

        DB::table('materias')->insert([
            // CONTABILIDAD INICIO
            // PRIMER AÑO
            ['materia' => 'CONTABILIDAD I', 'sigla' => 'CON-101', 'tipo' => 'BIMESTRE', 'carrera_id' => '1', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'MATEMÁTICA APLICADA', 'sigla' => 'MAT-102', 'tipo' => 'BIMESTRE', 'carrera_id' => '1', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'IDIOMA ORIGINARIO', 'sigla' => 'IDO-103', 'tipo' => 'BIMESTRE', 'carrera_id' => '1', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'INFORMÁTICA CONTABLE', 'sigla' => 'ICO-104', 'tipo' => 'BIMESTRE', 'carrera_id' => '1', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'HISTORIA DE SOCIEDADES DEL MUNDO', 'sigla' => 'HSM-105', 'tipo' => 'BIMESTRE', 'carrera_id' => '1', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'ADMINISTRACIÓN GENERAL', 'sigla' => 'AGL-106', 'tipo' => 'BIMESTRE', 'carrera_id' => '1', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'DERECHO COMERCIAL Y DOCUMENTOS MERCANTILES', 'sigla' => 'DCM-107', 'tipo' => 'BIMESTRE', 'carrera_id' => '1', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'RELACIONES HUMANAS, PÚBLICAS Y ÉTICA PROFESIONAL', 'sigla' => 'RHP-108', 'tipo' => 'BIMESTRE', 'carrera_id' => '1', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'LEGISLACIÓN LABORAL Y SEGURIDAD SOCIAL', 'sigla' => 'LEL-109', 'tipo' => 'BIMESTRE', 'carrera_id' => '1', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            // SEGUNDO AÑO
            ['materia' => 'CONTABILIDAD II', 'sigla' => 'CON-201', 'tipo' => 'BIMESTRE', 'carrera_id' => '1', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'CONTABILIDAD DE SOCIEDADES', 'sigla' => 'CDS-202', 'tipo' => 'BIMESTRE', 'carrera_id' => '1', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'CONTABILIDAD BANCARIA Y COOPERATIVA', 'sigla' => 'CBC-203', 'tipo' => 'BIMESTRE', 'carrera_id' => '1', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'CONTABILIDAD DE COSTOS I', 'sigla' => 'CDC-204', 'tipo' => 'BIMESTRE', 'carrera_id' => '1', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'MATEMÁTICA FINANCIERA', 'sigla' => 'MFI-205', 'tipo' => 'BIMESTRE', 'carrera_id' => '1', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'DESARROLLO DE SOCIEDADES', 'sigla' => 'DDS-206', 'tipo' => 'BIMESTRE', 'carrera_id' => '1', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'MICROECONOMÍA Y ESTADÍSTICA', 'sigla' => 'MEE-207', 'tipo' => 'BIMESTRE', 'carrera_id' => '1', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'LEGISLACIÓN Y PRACTICA TRIBUTARIA', 'sigla' => 'LPT-208', 'tipo' => 'BIMESTRE', 'carrera_id' => '1', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'INVESTIGACIÓN APLICADA', 'sigla' => 'INA-209', 'tipo' => 'BIMESTRE', 'carrera_id' => '1', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            // TERCER AÑO
            ['materia' => 'CONTABILIDAD AGROPECUARIA', 'sigla' => 'COA-301', 'tipo' => 'BIMESTRE', 'carrera_id' => '1', 'nivel_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'CONTABILIDAD EXTRACTIVA (MINERA, PETROLERA Y FORESTAL)', 'sigla' => 'CEX-302', 'tipo' => 'BIMESTRE', 'carrera_id' => '1', 'nivel_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'CONTABILIDAD DE SERVICIOS (CONSTRUCCIÓN, HOTELERA Y TRANSPORTES)', 'sigla' => 'COS-303', 'tipo' => 'BIMESTRE', 'carrera_id' => '1', 'nivel_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'CONTABILIDAD DE COSTOS II', 'sigla' => 'CDC-304', 'tipo' => 'BIMESTRE', 'carrera_id' => '1', 'nivel_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'CONTABILIDAD DE SEGUROS', 'sigla' => 'CDS-305', 'tipo' => 'BIMESTRE', 'carrera_id' => '1', 'nivel_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'CONTABILIDAD GUBERNAMENTAL INTEGRADA', 'sigla' => 'CGI-306', 'tipo' => 'BIMESTRE', 'carrera_id' => '1', 'nivel_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'ANÁLISIS E INTERPRETACIONES DE ESTADOS FINANCIEROS', 'sigla' => 'AEF-307', 'tipo' => 'BIMESTRE', 'carrera_id' => '1', 'nivel_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'PENSAMIENTO CONTEMPORÁNEO Y COSMOVISIÓN', 'sigla' => 'PCC-308', 'tipo' => 'BIMESTRE', 'carrera_id' => '1', 'nivel_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'GABINETE CONTABLE', 'sigla' => 'GAC-309', 'tipo' => 'BIMESTRE', 'carrera_id' => '1', 'nivel_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'TALLER DE GRADO', 'sigla' => 'TDG-310', 'tipo' => 'BIMESTRE', 'carrera_id' => '1', 'nivel_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            // CONTABILIDAD FIN

            // SECRETARIADO EJECUTIVO INICIO
            // PRIMER AÑO
            ['materia' => 'GESTIÓN SECRETARIAL I ', 'sigla' => 'GES-101', 'tipo' => 'BIMESTRE', 'carrera_id' => '2', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'MECANOGRAFÍA COMPUTARIZADA', 'sigla' => 'MEC-102', 'tipo' => 'BIMESTRE', 'carrera_id' => '2', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'COMPUTACIÓN I', 'sigla' => 'CMP-103', 'tipo' => 'BIMESTRE', 'carrera_id' => '2', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'LENGUAJE Y COMUNICACIÓN', 'sigla' => 'LYC–104', 'tipo' => 'BIMESTRE', 'carrera_id' => '2', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'IDIOMA ORIGINARIO I', 'sigla' => 'IDO–105', 'tipo' => 'BIMESTRE', 'carrera_id' => '2', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'LEGISLACIÓN, DOCUMENTOS MERCANTILES, DERECHO LABORAL', 'sigla' => 'LDD–106', 'tipo' => 'BIMESTRE', 'carrera_id' => '2', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'MATEMÁTICA COMERCIAL', 'sigla' => 'MAT-107', 'tipo' => 'BIMESTRE', 'carrera_id' => '2', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'INGLÉS TÉCNICO I', 'sigla' => 'INT-108', 'tipo' => 'BIMESTRE', 'carrera_id' => '2', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'RELACIONES INTERPERSONALES', 'sigla' => 'REI-109', 'tipo' => 'BIMESTRE', 'carrera_id' => '2', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'HISTORIA DE SOCIEDADES DEL MUNDO', 'sigla' => 'HSM-110', 'tipo' => 'BIMESTRE', 'carrera_id' => '2', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            // SEGUNDO AÑO
            ['materia' => 'REDACCIÓN Y CORRESPONDENCIA I', 'sigla' => 'REC-201', 'tipo' => 'BIMESTRE', 'carrera_id' => '2', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'GESTIÓN SECRETARIAL II', 'sigla' => 'GES-202', 'tipo' => 'BIMESTRE', 'carrera_id' => '2', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'RELACIONES PÚBLICAS Y ÉTICA', 'sigla' => 'RPE-203', 'tipo' => 'BIMESTRE', 'carrera_id' => '2', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'COMPUTACIÓN II', 'sigla' => 'CMP-204', 'tipo' => 'BIMESTRE', 'carrera_id' => '2', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'CONTABILIDAD I', 'sigla' => 'CON-205', 'tipo' => 'BIMESTRE', 'carrera_id' => '2', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'IDIOMA ORIGINARIO II', 'sigla' => 'IDO-206', 'tipo' => 'BIMESTRE', 'carrera_id' => '2', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'ADMINISTRACIÓN Y ORGANIZACIÓN', 'sigla' => 'ADO-207', 'tipo' => 'BIMESTRE', 'carrera_id' => '2', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'INGLES TÉCNICO II', 'sigla' => 'INT-208', 'tipo' => 'BIMESTRE', 'carrera_id' => '2', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'DESARROLLO DE LAS SOCIEDADES', 'sigla' => 'DDS-209', 'tipo' => 'BIMESTRE', 'carrera_id' => '2', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            // TERCER AÑO
            ['materia' => 'REDACCIÓN Y CORRESPONDENCIA II', 'sigla' => 'REC-301', 'tipo' => 'BIMESTRE', 'carrera_id' => '2', 'nivel_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'GESTIÓN SECRETARIAL III', 'sigla' => 'GES-302', 'tipo' => 'BIMESTRE', 'carrera_id' => '2', 'nivel_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'CONTABILIDAD II', 'sigla' => 'CON-303', 'tipo' => 'BIMESTRE', 'carrera_id' => '2', 'nivel_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'INGLES TÉCNICO III', 'sigla' => 'INT-304', 'tipo' => 'BIMESTRE', 'carrera_id' => '2', 'nivel_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'IDIOMA ORIGINARIO III', 'sigla' => 'IDO-305', 'tipo' => 'BIMESTRE', 'carrera_id' => '2', 'nivel_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'COMPUTACIÓN III', 'sigla' => 'CMP-306', 'tipo' => 'BIMESTRE', 'carrera_id' => '2', 'nivel_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'TALLER DE GRADO', 'sigla' => 'TGR-307', 'tipo' => 'BIMESTRE', 'carrera_id' => '2', 'nivel_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'PENSAMIENTO CONTEMPORÁNEO Y COSMOVISIÓN', 'sigla' => 'PCC-308', 'tipo' => 'BIMESTRE', 'carrera_id' => '2', 'nivel_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'ELECTIVAS', 'sigla' => 'ETV-309', 'tipo' => 'BIMESTRE', 'carrera_id' => '2', 'nivel_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'ELECTIVAS 2', 'sigla' => 'ETV-310', 'tipo' => 'BIMESTRE', 'carrera_id' => '2', 'nivel_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            // SECRETARIADO EJECUTIVO FIN

            // SISTEMAS INFORMATICOS INICIO
            // PRIMER AÑO TRIMESTRE
            ['materia' => 'HARDWARE DE COMPUTADORAS', 'sigla' => 'HDC-101', 'tipo' => 'TRIMESTRE', 'carrera_id' => '3', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'INFORMÁTICA APLICADA', 'sigla' => 'INA-102', 'tipo' => 'TRIMESTRE', 'carrera_id' => '3', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'IDIOMA ORIGINARIO', 'sigla' => 'IDO-103', 'tipo' => 'TRIMESTRE', 'carrera_id' => '3', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'INGLÉS TÉCNICO', 'sigla' => 'INT-104', 'tipo' => 'TRIMESTRE', 'carrera_id' => '3', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'PROGRAMACIÓN I', 'sigla' => 'PRG-105', 'tipo' => 'TRIMESTRE', 'carrera_id' => '3', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'TALLER DE PROGRAMACIÓN', 'sigla' => 'TDP-106', 'tipo' => 'TRIMESTRE', 'carrera_id' => '3', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'TALLER DE SISTEMAS OPERATIVOS', 'sigla' => 'TSO-107', 'tipo' => 'TRIMESTRE', 'carrera_id' => '3', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'HISTORIA DE SOCIEDADES DEL MUNDO', 'sigla' => 'HSM-108', 'tipo' => 'TRIMESTRE', 'carrera_id' => '3', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'MATEMÁTICAS PARA LAS COMPUTADORAS', 'sigla' => 'MPC-109', 'tipo' => 'TRIMESTRE', 'carrera_id' => '3', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            // SEGUNDO AÑO TRIMESTRE
            ['materia' => 'ANÁLISIS Y DISEÑO DE SISTEMAS I', 'sigla' => 'ADS-201', 'tipo' => 'TRIMESTRE', 'carrera_id' => '3', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'BASE DE DATOS I', 'sigla' => 'BDD-202', 'tipo' => 'TRIMESTRE', 'carrera_id' => '3', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'DISEÑO Y PROGRAMACIÓN WEB I', 'sigla' => 'DPW-203', 'tipo' => 'TRIMESTRE', 'carrera_id' => '3', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'ESTRUCTURA DE DATOS', 'sigla' => 'EDD-204', 'tipo' => 'TRIMESTRE', 'carrera_id' => '3', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'PROGRAMACIÓN II', 'sigla' => 'PRG-205', 'tipo' => 'TRIMESTRE', 'carrera_id' => '3', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'REDES DE COMPUTADORAS I', 'sigla' => 'RDC-206', 'tipo' => 'TRIMESTRE', 'carrera_id' => '3', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'TECNOLOGÍA GRÁFICA Y MULTIMEDIA', 'sigla' => 'TGM-207', 'tipo' => 'TRIMESTRE', 'carrera_id' => '3', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'DESARROLLO DE LAS SOCIEDADES', 'sigla' => 'DDS-208', 'tipo' => 'TRIMESTRE', 'carrera_id' => '3', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'ESTADÍSTICA APLICADA', 'sigla' => 'ETD-209', 'tipo' => 'TRIMESTRE', 'carrera_id' => '3', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            // TERCER AÑO TRIMESTRE
            ['materia' => 'ANÁLISIS Y DISEÑO DE SISTEMAS II', 'sigla' => 'ADS-301', 'tipo' => 'TRIMESTRE', 'carrera_id' => '3', 'nivel_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'BASE DE DATOS II', 'sigla' => 'BDD-302', 'tipo' => 'TRIMESTRE', 'carrera_id' => '3', 'nivel_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'DISEÑO Y PROGRAMACIÓN WEB II', 'sigla' => 'DPW-303', 'tipo' => 'TRIMESTRE', 'carrera_id' => '3', 'nivel_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'INGENIERÍA DE SOFTWARE', 'sigla' => 'IDS-304', 'tipo' => 'TRIMESTRE', 'carrera_id' => '3', 'nivel_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'PROGRAMACIÓN III', 'sigla' => 'PRG-305', 'tipo' => 'TRIMESTRE', 'carrera_id' => '3', 'nivel_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'REDES DE COMPUTADORAS II', 'sigla' => 'RDC-306', 'tipo' => 'TRIMESTRE', 'carrera_id' => '3', 'nivel_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'TALLER DE GRADO', 'sigla' => 'TDG-307', 'tipo' => 'TRIMESTRE', 'carrera_id' => '3', 'nivel_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'PENSAMIENTO CONTEMPORÁNEO Y COSMOVICIONES', 'sigla' => 'PCC-308', 'tipo' => 'TRIMESTRE', 'carrera_id' => '3', 'nivel_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            // PRIMER AÑO BIMESTRE
            ['materia' => 'MATEMÁTICAS PARA LA INFORMÁTICA', 'sigla' => 'MPI-101', 'tipo' => 'BIMESTRE', 'carrera_id' => '3', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'PROGRAMACIÓN I', 'sigla' => 'PRG-102', 'tipo' => 'BIMESTRE', 'carrera_id' => '3', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'INGLÉS TÉCNICO', 'sigla' => 'INT-103', 'tipo' => 'BIMESTRE', 'carrera_id' => '3', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'HARDWARE DE COMPUTADORAS', 'sigla' => 'HDC-104', 'tipo' => 'BIMESTRE', 'carrera_id' => '3', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'TALLER DE SISTEMAS OPERATIVOS', 'sigla' => 'TSO-105', 'tipo' => 'BIMESTRE', 'carrera_id' => '3', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'INFORMÁTICA APLICADA', 'sigla' => 'INA-106', 'tipo' => 'BIMESTRE', 'carrera_id' => '3', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'TECNOLOGÍA GRÁFICA Y MULTIMEDIA', 'sigla' => 'TGM-107', 'tipo' => 'BIMESTRE', 'carrera_id' => '3', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            // SEGUNDO AÑO BIMESTRE
            ['materia' => 'ESTADÍSTICA INFORMÁTICA', 'sigla' => 'ETD-201', 'tipo' => 'BIMESTRE', 'carrera_id' => '3', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'PROGRAMACIÓN II', 'sigla' => 'PRG-202', 'tipo' => 'BIMESTRE', 'carrera_id' => '3', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'ESTRUCTURA DE DATOS', 'sigla' => 'EDD-203', 'tipo' => 'BIMESTRE', 'carrera_id' => '3', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'REDES DE COMPUTADORAS I', 'sigla' => 'RDC-204', 'tipo' => 'BIMESTRE', 'carrera_id' => '3', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'PROGRAMACIÓN PARA DISPOSITIVOS', 'sigla' => 'PPD-205', 'tipo' => 'BIMESTRE', 'carrera_id' => '3', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'ANÁLISIS Y DISEÑO DE SISTEMAS I', 'sigla' => 'ADS-206', 'tipo' => 'BIMESTRE', 'carrera_id' => '3', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'DISEÑO Y PROGRAMACIÓN WEB I', 'sigla' => 'DPW-207', 'tipo' => 'BIMESTRE', 'carrera_id' => '3', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'BASE DE DATOS I', 'sigla' => 'BDD-208', 'tipo' => 'BIMESTRE', 'carrera_id' => '3', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            // SISTEMAS INFORMATICOS FIN

            // ADMINISTRACION EMPRESAS INICIO
            // PRIMER AÑO
            ['materia' => 'ADMINISTRACIÓN GENERAL', 'sigla' => 'ADG-101', 'tipo' => 'BIMESTRE', 'carrera_id' => '4', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'CONTABILIDAD GENERAL', 'sigla' => 'COG-102', 'tipo' => 'BIMESTRE', 'carrera_id' => '4', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'DERECHO ADMINISTRATIVO EMPRESARIAL', 'sigla' => 'DAE-103', 'tipo' => 'BIMESTRE', 'carrera_id' => '4', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'MATEMÁTICA FINANCIERA', 'sigla' => 'MTF-104', 'tipo' => 'BIMESTRE', 'carrera_id' => '4', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'CÁLCULO APLICADO', 'sigla' => 'CLA-105', 'tipo' => 'BIMESTRE', 'carrera_id' => '4', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'INFORMÁTICA APLICADA', 'sigla' => 'IFA-106', 'tipo' => 'BIMESTRE', 'carrera_id' => '4', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'PRÁCTICA INTEGRAL DE LA LENGUA ESPAÑOLA', 'sigla' => 'PLE-107', 'tipo' => 'BIMESTRE', 'carrera_id' => '4', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'INVESTIGACIÓN APLICADA I', 'sigla' => 'INA-108', 'tipo' => 'BIMESTRE', 'carrera_id' => '4', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'HISTORIA DE SOCIEDADES DEL MUNDO', 'sigla' => 'HSM-109', 'tipo' => 'BIMESTRE', 'carrera_id' => '4', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'IDIOMA ORIGINARIO', 'sigla' => 'IDO-110', 'tipo' => 'BIMESTRE', 'carrera_id' => '4', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            // SEGUNDO AÑO
            ['materia' => 'ORGANIZACIÓN Y SISTEMAS ADMINISTRATIVOS', 'sigla' => 'OSA-201', 'tipo' => 'BIMESTRE', 'carrera_id' => '4', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'ADMINISTRACIÓN DE PERSONAL', 'sigla' => 'ADP-202', 'tipo' => 'BIMESTRE', 'carrera_id' => '4', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'MERCADOTECNIA I', 'sigla' => 'MER-203', 'tipo' => 'BIMESTRE', 'carrera_id' => '4', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'ADMINISTRACIÓN DE LA PRODUCCIÓN I', 'sigla' => 'APP-204', 'tipo' => 'BIMESTRE', 'carrera_id' => '4', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'ADMINISTRACIÓN FINANCIERA I', 'sigla' => 'ADF-205', 'tipo' => 'BIMESTRE', 'carrera_id' => '4', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'ADMINISTRACIÓN PÚBLICA', 'sigla' => 'APU-206', 'tipo' => 'BIMESTRE', 'carrera_id' => '4', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'COSTOS Y PRESUPUESTOS', 'sigla' => 'COP-207', 'tipo' => 'BIMESTRE', 'carrera_id' => '4', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'ESTADÍSTICA APLICADA', 'sigla' => 'ESA-208', 'tipo' => 'BIMESTRE', 'carrera_id' => '4', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'MICROECONOMÍA', 'sigla' => 'MIC-209', 'tipo' => 'BIMESTRE', 'carrera_id' => '4', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'INVESTIGACIÓN APLICADA II', 'sigla' => 'INA-210', 'tipo' => 'BIMESTRE', 'carrera_id' => '4', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'DESARROLLO DE SOCIEDADES', 'sigla' => 'DDS-211', 'tipo' => 'BIMESTRE', 'carrera_id' => '4', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            // TERCER AÑO
            ['materia' => 'MERCADOTECNIA II', 'sigla' => 'MER-301', 'tipo' => 'BIMESTRE', 'carrera_id' => '4', 'nivel_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'PREPARACIÓN, EVALUACIÓN Y ADMINISTRACIÓN DE PROYECTOS', 'sigla' => 'PEA-302', 'tipo' => 'BIMESTRE', 'carrera_id' => '4', 'nivel_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'GESTIÓN ESTRATÉGICA Y TOMA DE DECISIONES', 'sigla' => 'GET-303', 'tipo' => 'BIMESTRE', 'carrera_id' => '4', 'nivel_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'NEGOCIACIÓN, ADMINISTRACIÓN Y RESOLUCIÓN DE CONFLICTOS', 'sigla' => 'NAR-304', 'tipo' => 'BIMESTRE', 'carrera_id' => '4', 'nivel_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'ÉTICA, TRANSPARENCIA Y RENDICIÓN DE CUENTAS', 'sigla' => 'ETR-305', 'tipo' => 'BIMESTRE', 'carrera_id' => '4', 'nivel_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'PLANIFICACIÓN DE DESARROLLO Y GESTIÓN MEDIOAMBIENTAL', 'sigla' => 'PDM-306', 'tipo' => 'BIMESTRE', 'carrera_id' => '4', 'nivel_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'ADMINISTRACIÓN FINANCIERA II', 'sigla' => 'ADF-307', 'tipo' => 'BIMESTRE', 'carrera_id' => '4', 'nivel_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'ADMINISTRACIÓN DE LA PRODUCCIÓN II', 'sigla' => 'APP-308', 'tipo' => 'BIMESTRE', 'carrera_id' => '4', 'nivel_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'GESTIÓN INTERCULTURAL', 'sigla' => 'GEI-309', 'tipo' => 'BIMESTRE', 'carrera_id' => '4', 'nivel_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'PENSAMIENTO CONTEMPORÁNEO Y COSMOVISIONES', 'sigla' => 'PCC-310', 'tipo' => 'BIMESTRE', 'carrera_id' => '4', 'nivel_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'MIPYMES', 'sigla' => 'MYP-311', 'tipo' => 'BIMESTRE', 'carrera_id' => '4', 'nivel_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'MERCADOTECNIA SOCIAL ', 'sigla' => 'MES-311', 'tipo' => 'BIMESTRE', 'carrera_id' => '4', 'nivel_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'GESTIÓN PUBLICA', 'sigla' => 'GSP-311', 'tipo' => 'BIMESTRE', 'carrera_id' => '4', 'nivel_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'OPERADOR FINANCIERO', 'sigla' => 'OPF-311', 'tipo' => 'BIMESTRE', 'carrera_id' => '4', 'nivel_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'COMERCIO INTERNACIONAL', 'sigla' => 'COI-311', 'tipo' => 'BIMESTRE', 'carrera_id' => '4', 'nivel_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'TALLER DE GRADO', 'sigla' => 'TDG-312', 'tipo' => 'BIMESTRE', 'carrera_id' => '4', 'nivel_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            // ADMINISTRACION EMPRESAS FIN

            // COMERCIO EXTERIOR INICIO
            // PRIMER AÑO
            ['materia' => 'REGÍMENES Y DESTINOS ADUANEROS', 'sigla' => 'RDA-101', 'tipo' => 'BIMESTRE', 'carrera_id' => '5', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'CLASIFICACIÓN ARANCELARIA Y MERCEOLOGÍA I', 'sigla' => 'CAM–102', 'tipo' => 'BIMESTRE', 'carrera_id' => '5', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'MARKETING', 'sigla' => 'MKG–103', 'tipo' => 'BIMESTRE', 'carrera_id' => '5', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'CONTABILIDAD GENERAL', 'sigla' => 'COG–104', 'tipo' => 'BIMESTRE', 'carrera_id' => '5', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'ESTADÍSTICA APLICADA', 'sigla' => 'ESA–105', 'tipo' => 'BIMESTRE', 'carrera_id' => '5', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'GESTIÓN JURÍDICA COMERCIAL Y TRIBUTARIA', 'sigla' => 'GJC–106', 'tipo' => 'BIMESTRE', 'carrera_id' => '5', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'ADMINISTRACIÓN', 'sigla' => 'ADM–107', 'tipo' => 'BIMESTRE', 'carrera_id' => '5', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'INFORMÁTICA APLICADA', 'sigla' => 'IFA–108', 'tipo' => 'BIMESTRE', 'carrera_id' => '5', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'ECONOMÍA', 'sigla' => 'ECO–109', 'tipo' => 'BIMESTRE', 'carrera_id' => '5', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'HISTORIA DE LAS SOCIEDADES', 'sigla' => 'HSM–110', 'tipo' => 'BIMESTRE', 'carrera_id' => '5', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            // SEGUNDO AÑO
            ['materia' => 'PROCESOS Y SISTEMAS ADUANEROS', 'sigla' => 'PSA-201', 'tipo' => 'BIMESTRE', 'carrera_id' => '5', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'CLASIFICACIÓN ARANCELARIA Y MERCEOLOGÍA II', 'sigla' => 'CAM–202', 'tipo' => 'BIMESTRE', 'carrera_id' => '5', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'NEGOCIACIÓN INTERNACIONAL', 'sigla' => 'NIN-203', 'tipo' => 'BIMESTRE', 'carrera_id' => '5', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'LOGÍSTICA Y TRANSPORTE INTERNACIONAL', 'sigla' => 'LTI-204', 'tipo' => 'BIMESTRE', 'carrera_id' => '5', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'CONTABILIDAD DE COSTOS', 'sigla' => 'CDC-205', 'tipo' => 'BIMESTRE', 'carrera_id' => '5', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'INTEGRACIÓN ECONÓMICA Y ORIGEN', 'sigla' => 'IEO-206', 'tipo' => 'BIMESTRE', 'carrera_id' => '5', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'INVESTIGACIÓN APLICADA', 'sigla' => 'INA-207', 'tipo' => 'BIMESTRE', 'carrera_id' => '5', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'DESARROLLO DE PRODUCTOS Y PRODUCCIÓN', 'sigla' => 'DPP-208', 'tipo' => 'BIMESTRE', 'carrera_id' => '5', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'INGLES TÉCNICO I', 'sigla' => 'INT-209', 'tipo' => 'BIMESTRE', 'carrera_id' => '5', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'DESARROLLO DE LAS SOCIEDADES', 'sigla' => 'DDS-210', 'tipo' => 'BIMESTRE', 'carrera_id' => '5', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            // TERCER AÑO
            ['materia' => 'PRÁCTICA PROFESIONAL ADUANERA', 'sigla' => 'PPA-301', 'tipo' => 'BIMESTRE', 'carrera_id' => '5', 'nivel_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'DISTRIBUCIÓN FÍSICA INTERNACIONAL', 'sigla' => 'DFI-302', 'tipo' => 'BIMESTRE', 'carrera_id' => '5', 'nivel_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'MARKETING INTERNACIONAL', 'sigla' => 'MKI-303', 'tipo' => 'BIMESTRE', 'carrera_id' => '5', 'nivel_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'COSTOS COMERCIALES Y FINANZAS', 'sigla' => 'CCF-304', 'tipo' => 'BIMESTRE', 'carrera_id' => '5', 'nivel_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'PROMOCIÓN INTERNACIONAL', 'sigla' => 'PRI-305', 'tipo' => 'BIMESTRE', 'carrera_id' => '5', 'nivel_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'TALLER DE EMPRENDIMIENTO INTERNACIONAL', 'sigla' => 'TEI-306', 'tipo' => 'BIMESTRE', 'carrera_id' => '5', 'nivel_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'TALLER DE GRADO', 'sigla' => 'TDG-307', 'tipo' => 'BIMESTRE', 'carrera_id' => '5', 'nivel_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'INGLES TÉCNICO', 'sigla' => 'INT-308', 'tipo' => 'BIMESTRE', 'carrera_id' => '5', 'nivel_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'IDIOMA ORIGINARIO', 'sigla' => 'IDO-309', 'tipo' => 'BIMESTRE', 'carrera_id' => '5', 'nivel_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['materia' => 'PENSAMIENTOS CONTEMPORÁNEOS Y COSMOVISIÓN', 'sigla' => 'PCC-310', 'tipo' => 'BIMESTRE', 'carrera_id' => '5', 'nivel_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            // COMERCIO EXTERIOR FIN

            // TERCER AÑO
            // ['materia' => '', 'sigla' => '', 'tipo' => 'BIMESTRE', 'carrera_id' => '1', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            // ['materia' => '', 'sigla' => '', 'tipo' => 'BIMESTRE', 'carrera_id' => '1', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            // ['materia' => '', 'sigla' => '', 'tipo' => 'BIMESTRE', 'carrera_id' => '1', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            // ['materia' => '', 'sigla' => '', 'tipo' => 'BIMESTRE', 'carrera_id' => '1', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            // ['materia' => '', 'sigla' => '', 'tipo' => 'BIMESTRE', 'carrera_id' => '1', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            // ['materia' => '', 'sigla' => '', 'tipo' => 'BIMESTRE', 'carrera_id' => '1', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            // ['materia' => '', 'sigla' => '', 'tipo' => 'BIMESTRE', 'carrera_id' => '1', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            // ['materia' => '', 'sigla' => '', 'tipo' => 'BIMESTRE', 'carrera_id' => '1', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            // ['materia' => '', 'sigla' => '', 'tipo' => 'BIMESTRE', 'carrera_id' => '1', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            // ['materia' => '', 'sigla' => '', 'tipo' => 'BIMESTRE', 'carrera_id' => '1', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
        ]);

        DB::table('cupos')->insert([
            ['id' => '1', 'cantidad' => '2', 'paralelos_cant' => '1', 'nivel' => '1', 'carrera_id' => '1', 'turno_id' => '1', 'estado' => 'true', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '2', 'cantidad' => '3', 'paralelos_cant' => '2', 'nivel' => '1', 'carrera_id' => '1', 'turno_id' => '2', 'estado' => 'true', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '3', 'cantidad' => '23', 'paralelos_cant' => '3', 'nivel' => '1', 'carrera_id' => '2', 'turno_id' => '1', 'estado' => 'true', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '4', 'cantidad' => '4', 'paralelos_cant' => '2', 'nivel' => '1', 'carrera_id' => '2', 'turno_id' => '2', 'estado' => 'true', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '5', 'cantidad' => '3', 'paralelos_cant' => '3', 'nivel' => '1', 'carrera_id' => '3', 'turno_id' => '1', 'estado' => 'true', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '6', 'cantidad' => '23', 'paralelos_cant' => '4', 'nivel' => '1', 'carrera_id' => '3', 'turno_id' => '2', 'estado' => 'true', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '7', 'cantidad' => '32', 'paralelos_cant' => '3', 'nivel' => '1', 'carrera_id' => '4', 'turno_id' => '1', 'estado' => 'true', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '8', 'cantidad' => '23', 'paralelos_cant' => '3', 'nivel' => '1', 'carrera_id' => '4', 'turno_id' => '2', 'estado' => 'true', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '9', 'cantidad' => '4', 'paralelos_cant' => '2', 'nivel' => '1', 'carrera_id' => '5', 'turno_id' => '1', 'estado' => 'true', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '10', 'cantidad' => '3', 'paralelos_cant' => '3', 'nivel' => '1', 'carrera_id' => '5', 'turno_id' => '2', 'estado' => 'true', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '11', 'cantidad' => '23', 'paralelos_cant' => '4', 'nivel' => '1', 'carrera_id' => '6', 'turno_id' => '1', 'estado' => 'true', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '12', 'cantidad' => '32', 'paralelos_cant' => '3', 'nivel' => '1', 'carrera_id' => '6', 'turno_id' => '2', 'estado' => 'true', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
        ]);
    
        DB::table('users')->insert([
            ['usuario' => 'AD-68', 'password' => '$2y$10$ylxNeSZSNlRbgwy5ab1jsOHnAGv6FpPz9pzgB86V7MuyGjRtcBDs.', 'rol_id'=>'1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['usuario' => 'RE-68', 'password' => '$2y$10$ylxNeSZSNlRbgwy5ab1jsOHnAGv6FpPz9pzgB86V7MuyGjRtcBDs.', 'rol_id'=>'2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['usuario' => 'DI-68', 'password' => '$2y$10$ylxNeSZSNlRbgwy5ab1jsOHnAGv6FpPz9pzgB86V7MuyGjRtcBDs.', 'rol_id'=>'3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['usuario' => 'SE-68', 'password' => '$2y$10$ylxNeSZSNlRbgwy5ab1jsOHnAGv6FpPz9pzgB86V7MuyGjRtcBDs.', 'rol_id'=>'4', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['usuario' => 'DO-68', 'password' => '$2y$10$ylxNeSZSNlRbgwy5ab1jsOHnAGv6FpPz9pzgB86V7MuyGjRtcBDs.', 'rol_id'=>'5', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
        ]);


    }
}
