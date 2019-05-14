<?php
namespace Shonen\DbPeru\Database\Seeds;
use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $regions = array(
            array('01', 'Amazonas'),
            array('02', 'Áncash'),
            array('03', 'Apurímac'),
            array('04', 'Arequipa'),
            array('05', 'Ayacucho'),
            array('06', 'Cajamarca'),
            array('07', 'Callao'),
            array('08', 'Cusco'),
            array('09', 'Huancavelica'),
            array('10', 'Huánuco'),
            array('11', 'Ica'),
            array('12', 'Junín'),
            array('13', 'La Libertad'),
            array('14', 'Lambayeque'),
            array('15', 'Lima'),
            array('16', 'Loreto'),
            array('17', 'Madre de Dios'),
            array('18', 'Moquegua'),
            array('19', 'Pasco'),
            array('20', 'Piura'),
            array('21', 'Puno'),
            array('22', 'San Martín'),
            array('23', 'Tacna'),
            array('24', 'Tumbes'),
            array('25', 'Ucayali'), 
        );
            
        
        for ($i=0; $i < count($regions) ; $i++) { 
            DB::table('regions')->insert([
                'code' => $regions[$i][0],
                'name' => $regions[$i][1]
            ]); 
        }


    }
}
