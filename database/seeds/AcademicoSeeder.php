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
            ['id' => '1', 'aula' => 'Laboratorio 1', 'ubicacion' => 'Tercer Piso', 'capacidad' => '35', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '2', 'aula' => 'Laboratorio 2', 'ubicacion' => 'Tercer Piso', 'capacidad' => '30', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '3', 'aula' => 'Laboratorio 3', 'ubicacion' => 'Tercer Piso', 'capacidad' => '35', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '4', 'aula' => 'Laboratorio 4', 'ubicacion' => 'Tercer Piso', 'capacidad' => '25', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '5', 'aula' => 'Laboratorio 5', 'ubicacion' => 'Cuarto Piso', 'capacidad' => '35', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '6', 'aula' => 'Laboratorio 6', 'ubicacion' => 'Cuarto Piso', 'capacidad' => '30', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
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
            //PRIMER AÑO TRIMESTRE
            ['id' => '1', 'materia' => 'HARDWARE DE COMPUTADORAS', 'sigla' => 'HDC-101', 'tipo' => 'TRIMESTRE', 'carrera_id' => '3', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '2', 'materia' => 'INFORMÁTICA APLICADA', 'sigla' => 'INA-102', 'tipo' => 'TRIMESTRE', 'carrera_id' => '3', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '3', 'materia' => 'IDIOMA ORIGINARIO', 'sigla' => 'IDO-103', 'tipo' => 'TRIMESTRE', 'carrera_id' => '3', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '4', 'materia' => 'INGLÉS TÉCNICO', 'sigla' => 'INT-104', 'tipo' => 'TRIMESTRE', 'carrera_id' => '3', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '5', 'materia' => 'PROGRAMACIÓN I', 'sigla' => 'PRG-105', 'tipo' => 'TRIMESTRE', 'carrera_id' => '3', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '6', 'materia' => 'TALLER DE PROGRAMACIÓN', 'sigla' => 'TDP-106', 'tipo' => 'TRIMESTRE', 'carrera_id' => '3', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '7', 'materia' => 'TALLER DE SISTEMAS OPERATIVOS', 'sigla' => 'TSO-107', 'tipo' => 'TRIMESTRE', 'carrera_id' => '3', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '8', 'materia' => 'HISTORIA DE SOCIEDADES DEL MUNDO', 'sigla' => 'HSM-108', 'tipo' => 'TRIMESTRE', 'carrera_id' => '3', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '9', 'materia' => 'MATEMÁTICAS PARA LAS COMPUTADORAS', 'sigla' => 'MPC-109', 'tipo' => 'TRIMESTRE', 'carrera_id' => '3', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            //SEGUNDO AÑO TRIMESTRE
            ['id' => '10', 'materia' => 'ANÁLISIS Y DISEÑO DE SISTEMAS I', 'sigla' => 'ADS-201', 'tipo' => 'TRIMESTRE', 'carrera_id' => '3', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '11', 'materia' => 'BASE DE DATOS I', 'sigla' => 'BDD-202', 'tipo' => 'TRIMESTRE', 'carrera_id' => '3', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '12', 'materia' => 'DISEÑO Y PROGRAMACIÓN WEB I', 'sigla' => 'DPW-203', 'tipo' => 'TRIMESTRE', 'carrera_id' => '3', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '13', 'materia' => 'ESTRUCTURA DE DATOS', 'sigla' => 'EDD-204', 'tipo' => 'TRIMESTRE', 'carrera_id' => '3', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '14', 'materia' => 'PROGRAMACIÓN II', 'sigla' => 'PRG-205', 'tipo' => 'TRIMESTRE', 'carrera_id' => '3', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '15', 'materia' => 'REDES DE COMPUTADORAS I', 'sigla' => 'RDC-206', 'tipo' => 'TRIMESTRE', 'carrera_id' => '3', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '16', 'materia' => 'TECNOLOGÍA GRÁFICA Y MULTIMEDIA', 'sigla' => 'TGM-207', 'tipo' => 'TRIMESTRE', 'carrera_id' => '3', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '17', 'materia' => 'DESARROLLO DE LAS SOCIEDADES', 'sigla' => 'DDS-208', 'tipo' => 'TRIMESTRE', 'carrera_id' => '3', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '18', 'materia' => 'ESTADÍSTICA APLICADA', 'sigla' => 'ETD-209', 'tipo' => 'TRIMESTRE', 'carrera_id' => '3', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            //TERCER AÑO TRIMESTRE
            ['id' => '19', 'materia' => 'ANÁLISIS Y DISEÑO DE SISTEMAS II', 'sigla' => 'ADS-301', 'tipo' => 'TRIMESTRE', 'carrera_id' => '3', 'nivel_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '20', 'materia' => 'BASE DE DATOS II', 'sigla' => 'BDD-302', 'tipo' => 'TRIMESTRE', 'carrera_id' => '3', 'nivel_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '21', 'materia' => 'DISEÑO Y PROGRAMACIÓN WEB II', 'sigla' => 'DPW-303', 'tipo' => 'TRIMESTRE', 'carrera_id' => '3', 'nivel_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '22', 'materia' => 'INGENIERÍA DE SOFTWARE', 'sigla' => 'IDS-304', 'tipo' => 'TRIMESTRE', 'carrera_id' => '3', 'nivel_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '23', 'materia' => 'PROGRAMACIÓN III', 'sigla' => 'PRG-305', 'tipo' => 'TRIMESTRE', 'carrera_id' => '3', 'nivel_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '24', 'materia' => 'REDES DE COMPUTADORAS II', 'sigla' => 'RDC-306', 'tipo' => 'TRIMESTRE', 'carrera_id' => '3', 'nivel_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '25', 'materia' => 'TALLER DE GRADO', 'sigla' => 'TDG-307', 'tipo' => 'TRIMESTRE', 'carrera_id' => '3', 'nivel_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '26', 'materia' => 'PENSAMIENTO CONTEMPORÁNEO Y COSMOVICIONES', 'sigla' => 'PCC-308', 'tipo' => 'TRIMESTRE', 'carrera_id' => '3', 'nivel_id' => '3', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            //PRIMER AÑO BIMESTRE
            ['id' => '27', 'materia' => 'MATEMÁTICAS PARA LA INFORMÁTICA', 'sigla' => 'MPI-101', 'tipo' => 'BIMESTRE', 'carrera_id' => '3', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '28', 'materia' => 'PROGRAMACIÓN I', 'sigla' => 'PRG-102', 'tipo' => 'BIMESTRE', 'carrera_id' => '3', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '29', 'materia' => 'INGLÉS TÉCNICO', 'sigla' => 'INT-103', 'tipo' => 'BIMESTRE', 'carrera_id' => '3', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '30', 'materia' => 'HARDWARE DE COMPUTADORAS', 'sigla' => 'HDC-104', 'tipo' => 'BIMESTRE', 'carrera_id' => '3', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '31', 'materia' => 'TALLER DE SISTEMAS OPERATIVOS', 'sigla' => 'TSO-105', 'tipo' => 'BIMESTRE', 'carrera_id' => '3', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '32', 'materia' => 'INFORMÁTICA APLICADA', 'sigla' => 'INA-106', 'tipo' => 'BIMESTRE', 'carrera_id' => '3', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['id' => '33', 'materia' => 'TECNOLOGÍA GRÁFICA Y MULTIMEDIA', 'sigla' => 'TGM-107', 'tipo' => 'BIMESTRE', 'carrera_id' => '3', 'nivel_id' => '1', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            //SEGUNDO AÑO BIMESTRE
            ['ids' => '34', 'materia' => 'ESTADÍSTICA INFORMÁTICA', 'sigla' => 'ETD-201', 'tipo' => 'BIMESTRE', 'carrera_id' => '3', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['ids' => '35', 'materia' => 'PROGRAMACIÓN II', 'sigla' => 'PRG-202', 'tipo' => 'BIMESTRE', 'carrera_id' => '3', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['ids' => '36', 'materia' => 'ESTRUCTURA DE DATOS', 'sigla' => 'EDD-203', 'tipo' => 'BIMESTRE', 'carrera_id' => '3', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['ids' => '37', 'materia' => 'REDES DE COMPUTADORAS I', 'sigla' => 'RDC-204', 'tipo' => 'BIMESTRE', 'carrera_id' => '3', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['ids' => '38', 'materia' => 'PROGRAMACIÓN PARA DISPOSITIVOS', 'sigla' => 'PPD-205', 'tipo' => 'BIMESTRE', 'carrera_id' => '3', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['ids' => '39', 'materia' => 'ANÁLISIS Y DISEÑO DE SISTEMAS I', 'sigla' => 'ADS-206', 'tipo' => 'BIMESTRE', 'carrera_id' => '3', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['ids' => '40', 'materia' => 'DISEÑO Y PROGRAMACIÓN WEB I', 'sigla' => 'DPW-207', 'tipo' => 'BIMESTRE', 'carrera_id' => '3', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['ids' => '41', 'materia' => 'BASE DE DATOS I', 'sigla' => 'BDD-208', 'tipo' => 'BIMESTRE', 'carrera_id' => '3', 'nivel_id' => '2', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],

        ]);


    }
}
