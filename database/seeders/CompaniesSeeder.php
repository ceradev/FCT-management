<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;
class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $companies = [
            ['id' => 1 ,'name' => 'ATOS', 'url' => 'https://atos.net/es/spain', 'mode' => 'online', 'description' => 'Desarrollo de aplicaciones a grandes empresas. Muy variadas dependiendo del proyecto.Java Spring, React / Angular,...'],
            ['id' => 2 ,'name' => 'Lean Mind', 'url' => 'https://leanmind.es/es/', 'mode' => 'online', 'description' => 'Desarrollo de aplicaciones y asesoramiento a empresas de desarrollo. Software de calidad, principios de diseño, patrones, BDD, TDD, DDD, Typescript.'],
            ['id' => 3 ,'name' => 'CodeBay', 'url' => 'https://www.codebay-innovation.com/es/inicio/', 'mode' => 'semipresencial', 'description' => 'Desarrollo de portales a grandes empresas CMS específico de Adobe.'],
            ['id' => 4 ,'name' => 'Ayuntamiento de Adeje', 'url' => 'https://www.adeje.es/', 'mode' => 'presencial', 'description' => 'Gestión municipal. Desarrollo de aplicaciones propias.'],
            ['id' => 5 ,'name' => 'STV', 'url' => 'http://stvcanarias.com/', 'mode' => 'presencial', 'description' => 'Distribución y reparación de máquinas de vending. Desarrollo de aplicaciones propias para la gestión de las reparaciones, etc.'],
            ['id' => 6 ,'name' => 'GOWEB', 'url' => 'https://www.goweb.es/', 'mode' => 'presencial', 'description' => 'Mantenimiento tecnológico y desarrollo software Wordpress.'],
            ['id' => 7 ,'name' => 'Akrolih', 'url' => 'https://akrolih.com/', 'mode' => 'online', 'description' => 'Asesoramiento, sitio web, comercio electrónico, CMS: Wordpress, PrestaShop (Modificar módulos) CRM a medida. Laravel SEO y marketing'],
            ['id' => 8 ,'name' => 'Medano Solution', 'url' => 'https://medanosol.es/es', 'mode' => 'online', 'description' => 'Desarrollo de WebApp. React, typescript, tailwind, mongo, docker, graphQL'],
            ['id' => 9 ,'name' => 'Conectatec', 'url' => 'https://www.conectatec.com/', 'mode' => 'presencial', 'description' => 'Innovación y marketing para hoteles. Desarrollo y mantenimiento de Webs, WebApps.'],
            ['id' => 10 ,'name' => 'Blue Grow', 'url' => 'https://thebluegrow.com/', 'mode' => 'online', 'description' => 'Presencia Web y posicionamiento. Estrategias de marketing. Wordpress / Elementor / Plugins SEO y marketing Diseño web.'],
            ['id' => 11 ,'name' => 'Nexo365', 'url' => 'https://nexo365.com', 'mode' => 'presencial', 'description' => 'Instalación y mantenimiento de alarmas, seguridad, TPV. Desarrollo de App propia (CRM)'],
            ['id' => 12 ,'name' => 'Turitop', 'url' => 'https://www.turitop.com/es/', 'mode' => 'online', 'description' => 'Presencia Web y posicionamiento. Gestión de reserva de eventos. Wordpress / Módulos propios'],
            ['id' => 13 ,'name' => 'Telepizza', 'url' => 'https://www.telepizza.es/', 'mode' => 'presencial', 'description' => 'Dedicada a la realización de pizza y servicio a domicilio. Su secreto está en la masa.'],
        ];

        Company::insert($companies);
    }
}
