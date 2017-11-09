<?php

use Illuminate\Database\Seeder;

use App\State;
use Faker\Factory as Faker;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(['api_token' => 'N1RTRrbM5J3Fa8sVwlZMxhdLUv4MGODi']);

        //DB::table('states')->truncate();
        State::create(['name' => 'Alaska', 'code' => 'AK']);
        State::create(['name' => 'Alabama', 'code' => 'AL']);
        State::create(['name' => 'American Samoa', 'code' => 'AS']);
        State::create(['name' => 'Arizona', 'code' => 'AZ']);
        State::create(['name' => 'Arkansas', 'code' => 'AR']);
        State::create(['name' => 'California', 'code' => 'CA']);
        State::create(['name' => 'Colorado', 'code' => 'CO']);
        State::create(['name' => 'Connecticut', 'code' => 'CT']);
        State::create(['name' => 'Delaware', 'code' => 'DE']);
        State::create(['name' => 'District of Columbia', 'code' => 'DC']);
        State::create(['name' => 'Federated States of Micronesia', 'code' => 'FM']);
        State::create(['name' => 'Florida', 'code' => 'FL']);
        State::create(['name' => 'Georgia', 'code' => 'GA']);
        State::create(['name' => 'Guam', 'code' => 'GU']);
        State::create(['name' => 'Hawaii', 'code' => 'HI']);
        State::create(['name' => 'Idaho', 'code' => 'ID']);
        State::create(['name' => 'Illinois', 'code' => 'IL']);
        State::create(['name' => 'Indiana', 'code' => 'IN']);
        State::create(['name' => 'Iowa', 'code' => 'IA']);
        State::create(['name' => 'Kansas', 'code' => 'KS']);
        State::create(['name' => 'Kentucky', 'code' => 'KY']);
        State::create(['name' => 'Louisiana', 'code' => 'LA']);
        State::create(['name' => 'Maine', 'code' => 'ME']);
        State::create(['name' => 'Marshall Islands', 'code' => 'MH']);
        State::create(['name' => 'Maryland', 'code' => 'MD']);
        State::create(['name' => 'Massachusetts', 'code' => 'MA']);
        State::create(['name' => 'Michigan', 'code' => 'MI']);
        State::create(['name' => 'Minnesota', 'code' => 'MN']);
        State::create(['name' => 'Mississippi', 'code' => 'MS']);
        State::create(['name' => 'Missouri', 'code' => 'MO']);
        State::create(['name' => 'Montana', 'code' => 'MT']);
        State::create(['name' => 'Nebraska', 'code' => 'NE']);
        State::create(['name' => 'Nevada', 'code' => 'NV']);
        State::create(['name' => 'New Hampshire', 'code' => 'NH']);
        State::create(['name' => 'New Jersey', 'code' => 'NJ']);
        State::create(['name' => 'New Mexico', 'code' => 'NM']);
        State::create(['name' => 'New York', 'code' => 'NY']);
        State::create(['name' => 'North Carolina', 'code' => 'NC']);
        State::create(['name' => 'North Dakota', 'code' => 'ND']);
        State::create(['name' => 'Northern Mariana Islands', 'code' => 'MP']);
        State::create(['name' => 'Ohio', 'code' => 'OH']);
        State::create(['name' => 'Oklahoma', 'code' => 'OK']);
        State::create(['name' => 'Oregon', 'code' => 'OR']);
        State::create(['name' => 'Palau', 'code' => 'PW']);
        State::create(['name' => 'Pennsylvania', 'code' => 'PA']);
        State::create(['name' => 'Puerto Rico', 'code' => 'PR']);
        State::create(['name' => 'Rhode Island', 'code' => 'RI']);
        State::create(['name' => 'South Carolina', 'code' => 'SC']);
        State::create(['name' => 'South Dakota', 'code' => 'SD']);
        State::create(['name' => 'Tennessee', 'code' => 'TN']);
        State::create(['name' => 'Texas', 'code' => 'TX']);
        State::create(['name' => 'Utah', 'code' => 'UT']);
        State::create(['name' => 'Vermont', 'code' => 'VT']);
        State::create(['name' => 'Virgin Islands', 'code' => 'VI']);
        State::create(['name' => 'Virginia', 'code' => 'VA']);
        State::create(['name' => 'Washington', 'code' => 'WA']);
        State::create(['name' => 'West Virginia', 'code' => 'WV']);
        State::create(['name' => 'Wisconsin', 'code' => 'WI']);
        State::create(['name' => 'Wyoming', 'code' => 'WY']);
        State::create(['name' => 'Armed Forces Africa', 'code' => 'AE']);
        State::create(['name' => 'Armed Forces Americas (except Canada)', 'code' => 'AA']);
        State::create(['name' => 'Armed Forces Canada', 'code' => 'AE']);
        State::create(['name' => 'Armed Forces Europe', 'code' => 'AE']);
        State::create(['name' => 'Armed Forces Middle East', 'code' => 'AE']);
        State::create(['name' => 'Armed Forces Pacific', 'code' => 'AP']);

        $faker = Faker::create();
        // $this->call('UsersTableSeeder');
//        DB::table('experiences')->insert([
//            'name' => str_random(10),
//            'email' => str_random(10).'@gmail.com',
//            'password' => bcrypt('secret'),
//        ]);
        DB::table('experiences')->insert([
            'company' => 'Lambda Chi Alpha Zeta',
            'city' => 'Memphis',
            'title' => 'High Tau (Treasurer)',
            'body' => 'I was the treasurer of the Lambda Chi Alpha chapter at University of Memphis. Lambda Chi Alpha is a social fraternity, and the the chapter at University of Memphis had 40 to 70 members and an annual budget of approximately $100,000.00 per year. Responsibilities included collection of dues, payment of bills, and preparing and presenting the annual budget to the chapter. Additional duties included creation and implementation of long term financial plans to assure the financial viability of the chapter. I was also responsible for interacting with the national Lambda Chi Alpha organization and insuring that our chapter complied with national standards.',
            'start_date' => Carbon::create('2013', '11', '01'),
            'state_id' => 50,
            'end_date' => Carbon::create('2015', '01', '01'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('experiences')->insert([
            'company' => 'Army Corps of Engineers',
            'city' => 'Memphis',
            'title' => 'Summer Intern',
            'body' => 'In this position I developed software that displayed river stages of several area rivers on an hourly basis.',
            'start_date' => Carbon::create('2015', '05', '01'),
            'state_id' => 50,
            'end_date' => Carbon::create('2015', '08', '01'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('experiences')->insert([
            'company' => 'Signature Advertising',
            'city' => 'Memphis',
            'title' => 'Digital Media Intern',
            'body' => 'In this position I assist in the development and maintenance of client websites using HTML, CSS, PHP, and WordPress. Also assisted in the migration of the agency server to a cloud server.',
            'start_date' => Carbon::create('2015', '02', '01'),
            'state_id' => 50,
            'end_date' => Carbon::create('2017', '09', '01'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('experiences')->insert([
            'company' => 'Crisp Marketing',
            'city' => 'Memphis',
            'title' => 'Web Developer',
            'body' => 'Develop websites to generate Leads for companies.',
            'start_date' => Carbon::create('2017', '09', '01'),
            'state_id' => 50,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
//        foreach (range(1,10) as $index) {
//            DB::table('experiences')->insert([
//                'company' => $faker->company,
//                'city' => $faker->city,
//                'title' => $faker->jobTitle,
//                'body' => $faker->text(200),
//                'start_date' => $faker->dateTime(),
//                'state_id' => 50,
//                'end_date' => $faker->dateTime(),
//            ]);
//        }

        DB::table('education')->insert([
            'school_name' => 'Christian Brothers High School',
            'city' => 'Memphis',
            'start_date' => Carbon::create('2008', '08', '01'),
            'end_date' => Carbon::create('2012', '05', '01'),
            'state_id' => 50,
        ]);
        DB::table('education')->insert([
            'school_name' => 'University of Memphis',
            'city' => 'Memphis',
            'degree' => 'BS',
            'area_of_study' => 'Computer Science',
            'start_date' => Carbon::create('2012', '08', '01'),
            'end_date' => Carbon::create('2015', '05', '01'),
            'state_id' => 50,
        ]);
        DB::table('education')->insert([
            'school_name' => 'University of Memphis',
            'city' => 'Memphis',
            'degree' => 'MBA',
            'area_of_study' => 'Professional MBA',
            'start_date' => Carbon::create('2015', '08', '01'),
            'state_id' => 50,
        ]);

//        foreach (range(1,3) as $index) {
//            DB::table('education')->insert([
//                'school_name' => $faker->word,
//                'city' => $faker->city,
//                'degree' => $faker->jobTitle,
//                'area_of_study' => $faker->word,
//                'start_date' => $faker->dateTime(),
//                'end_date' => $faker->dateTime(),
//                'state_id' => 50,
//            ]);
//        }
        DB::table('clients')->insert([
            'name' => 'Germantown Farm Park',
            'state_id' => 50,
        ]);
        DB::table('clients')->insert([
            'name' => 'FastAPP',
            'state_id' => 50,
        ]);
        DB::table('clients')->insert([
            'name' => 'Lambda Chi Alpha Zeta Theta',
            'state_id' => 50,
        ]);
        DB::table('clients')->insert([
            'name' => 'Urbane Scrubs',
            'state_id' => 50,
        ]);
        DB::table('clients')->insert([
            'name' => 'Joseph Murphy',
            'state_id' => 50,
        ]);
        DB::table('clients')->insert([
            'name' => 'Bussenger Chiropractic Clinic',
            'state_id' => 50,
        ]);

//        foreach (range(1,13) as $index) {
//            DB::table('clients')->insert([
//                'name' => $faker->company,
//                'state_id' => 50,
//            ]);
//        }

        DB::table('works')->insert([
            'title' => 'Harvest Moon Site',
            'body' => 'Developed the new design of the Germantown Farm Park Harvest Moon website. Used Twitter Bootstrap and JQuery to implement this website.',
            'square_img' => 'https://s3.amazonaws.com/jmurphy-website/test/square_0003_fastapp.jpg',
            'portait_img' => 'https://s3.amazonaws.com/jmurphy-website/test/long_0003_fastapp.jpg',
            'landscapre_img' => 'https://s3.amazonaws.com/jmurphy-website/test/potrait_0003_Layer_2.jpg',
            'state_id' => 50,
            'client_id' => 1,
        ]);

        DB::table('works')->insert([
            'title' => 'FastApp Launch Page',
            'body' => 'Developed the launch page for our startup FastApp using Twitter Bootstrap and JQuery.',
            'square_img' => 'https://s3.amazonaws.com/jmurphy-website/test/square_0003_fastapp.jpg',
            'portait_img' => 'https://s3.amazonaws.com/jmurphy-website/test/long_0003_fastapp.jpg',
            'landscapre_img' => 'https://s3.amazonaws.com/jmurphy-website/test/potrait_0003_Layer_2.jpg',
            'state_id' => 50,
            'client_id' => 2,
        ]);
        DB::table('works')->insert([
            'title' => 'Lambda Chi Alpha Website',
            'body' => 'Developed the launch page for our startup FastApp using Twitter Bootstrap and JQuery.',
            'square_img' => 'https://s3.amazonaws.com/jmurphy-website/test/square_0003_fastapp.jpg',
            'portait_img' => 'https://s3.amazonaws.com/jmurphy-website/test/long_0003_fastapp.jpg',
            'landscapre_img' => 'https://s3.amazonaws.com/jmurphy-website/test/potrait_0003_Layer_2.jpg',
            'state_id' => 50,
            'client_id' => 3,
        ]);
        DB::table('works')->insert([
            'title' => 'Urbane Web Banners',
            'body' => 'Developed the Fall 2016 web banners for Urbane, a brand of scrubs marketed to people in the medical field.',
            'square_img' => 'https://s3.amazonaws.com/jmurphy-website/test/square_0003_fastapp.jpg',
            'portait_img' => 'https://s3.amazonaws.com/jmurphy-website/test/long_0003_fastapp.jpg',
            'landscapre_img' => 'https://s3.amazonaws.com/jmurphy-website/test/potrait_0003_Layer_2.jpg',
            'state_id' => 50,
            'client_id' => 4,
        ]);
        DB::table('works')->insert([
            'title' => 'How to Code a HTML Website for Beginners',
            'body' => '',
            'square_img' => 'https://s3.amazonaws.com/jmurphy-website/test/square_0003_fastapp.jpg',
            'portait_img' => 'https://s3.amazonaws.com/jmurphy-website/test/long_0003_fastapp.jpg',
            'landscapre_img' => 'https://s3.amazonaws.com/jmurphy-website/test/potrait_0003_Layer_2.jpg',
            'state_id' => 50,
            'client_id' => 5,
        ]);
        DB::table('works')->insert([
            'title' => 'Bussenger Chiropractic Clinic Website',
            'body' => 'Developed a website for a local chiropractor using Twitter Bootstrap and Scrollify, which gave the website a one of kind look.',
            'square_img' => 'https://s3.amazonaws.com/jmurphy-website/test/square_0003_fastapp.jpg',
            'portait_img' => 'https://s3.amazonaws.com/jmurphy-website/test/long_0003_fastapp.jpg',
            'landscapre_img' => 'https://s3.amazonaws.com/jmurphy-website/test/potrait_0003_Layer_2.jpg',
            'state_id' => 50,
            'client_id' => 5,
        ]);

//        foreach (range(1,13) as $index) {
//            DB::table('works')->insert([
//                'title' => 'Lambda Chi Alpha Website',
//                'body' => 'Strategized and developed the new online brand for Zeta Theta Chapter of Lambda Chi Alpha at University of Memphis. Implemented the new website using Twitter Bootstrap fir the frontend of the website and WordPress as the backend for easy edits.',
//                'square_img' => 'https://s3.amazonaws.com/jmurphy-website/test/square_0003_fastapp.jpg',
//                'portait_img' => 'https://s3.amazonaws.com/jmurphy-website/test/long_0003_fastapp.jpg',
//                'landscapre_img' => '127.0.0.1',
//                'state_id' => 50,
//                'client_id' => 3,
//            ]);
//        }

        DB::table('tags')->insert([
            'name' => 'HTML',
            'type' => 'work',
            'work_id' => 1,
        ]);
        DB::table('tags')->insert([
            'name' => 'CSS',
            'type' => 'work',
            'work_id' => 1,
        ]);
        DB::table('tags')->insert([
            'name' => 'Bootstrap',
            'type' => 'work',
            'work_id' => 1,
        ]);
        DB::table('tags')->insert([
            'name' => 'HTML',
            'type' => 'work',
            'work_id' => 2,
        ]);
        DB::table('tags')->insert([
            'name' => 'CSS',
            'type' => 'work',
            'work_id' => 2,
        ]);
        DB::table('tags')->insert([
            'name' => 'Bootstrap',
            'type' => 'work',
            'work_id' => 2,
        ]);
        DB::table('tags')->insert([
            'name' => 'HTML',
            'type' => 'work',
            'work_id' => 3,
        ]);
        DB::table('tags')->insert([
            'name' => 'CSS',
            'type' => 'work',
            'work_id' => 3,
        ]);
        DB::table('tags')->insert([
            'name' => 'WordPress',
            'type' => 'work',
            'work_id' => 3,
        ]);
        DB::table('tags')->insert([
            'name' => 'HTML',
            'type' => 'work',
            'work_id' => 4,
        ]);
        DB::table('tags')->insert([
            'name' => 'CSS',
            'type' => 'work',
            'work_id' => 4,
        ]);
        DB::table('tags')->insert([
            'name' => 'Writing',
            'type' => 'work',
            'work_id' => 5,
        ]);
        DB::table('tags')->insert([
            'name' => 'Publication',
            'type' => 'work',
            'work_id' => 5,
        ]);
        DB::table('tags')->insert([
            'name' => 'HTML',
            'type' => 'work',
            'work_id' => 6,
        ]);
        DB::table('tags')->insert([
            'name' => 'CSS',
            'type' => 'work',
            'work_id' => 6,
        ]);
        DB::table('tags')->insert([
            'name' => 'Bootstrap',
            'type' => 'work',
            'work_id' => 6,
        ]);


//        foreach (range(1,13) as $index) {
//            DB::table('tags')->insert([
//                'name' => $faker->words(3, true)  ,
//                'type' => 'work',
//                'work_id' => 3,
//            ]);
//        }

        DB::table('categories')->insert([
            'name' => 'Web',
            'type' => 'work',
            'work_id' => 1,
        ]);
        DB::table('categories')->insert([
            'name' => 'Web',
            'type' => 'work',
            'work_id' => 2,
        ]);
        DB::table('categories')->insert([
            'name' => 'Web',
            'type' => 'work',
            'work_id' => 3,
        ]);
        DB::table('categories')->insert([
            'name' => 'Web',
            'type' => 'work',
            'work_id' => 4,
        ]);
        DB::table('categories')->insert([
            'name' => 'Branding',
            'type' => 'work',
            'work_id' => 5,
        ]);
        DB::table('categories')->insert([
            'name' => 'Web',
            'type' => 'work',
            'work_id' => 6,
        ]);


//        foreach (range(1,13) as $index) {
//            DB::table('categories')->insert([
//                'name' => $faker->words(3, true),
//                'type' => 'work',
//                'work_id' => 6,
//            ]);
//        }

//        foreach (range(1,6) as $index) {
//            DB::table('works')->insert([
//                'title' => $faker->words(3, true),
//                'body' => $faker->text(200),
//                'square_img' => 'https://s3.amazonaws.com/jmurphy-website/test/square_0003_fastapp.jpg',
//                'portait_img' => 'https://s3.amazonaws.com/jmurphy-website/test/long_0003_fastapp.jpg',
//                'landscapre_img' => '127.0.0.1',
//                'state_id' => 50,
//                'client_id' => 4,
//            ]);
//        }


        DB::table('work_experiences')->insert([
            'work_id' => 1,
            'experience_id' => 3,
        ]);
        DB::table('work_experiences')->insert([
            'work_id' => 4,
            'experience_id' => 3,
        ]);
        DB::table('work_experiences')->insert([
            'work_id' => 6,
            'experience_id' => 3,
        ]);

//        foreach (range(1,3) as $index) {
//            DB::table('work_experiences')->insert([
//                'work_id' => 4,
//                'experience_id' => 4,
//            ]);
//        }

        DB::table('portfolio')->insert([
            'work_location' => 1,
            'image_type' => 'portrait',
            'work_id' => 1,
        ]);
        DB::table('portfolio')->insert([
            'work_location' => 2,
            'image_type' => 'square',
            'work_id' => 2,
        ]);
        DB::table('portfolio')->insert([
            'work_location' => 3,
            'image_type' => 'square',
            'work_id' => 3,
        ]);
        DB::table('portfolio')->insert([
            'work_location' => 4,
            'image_type' => 'square',
            'work_id' => 4,
        ]);
        DB::table('portfolio')->insert([
            'work_location' => 5,
            'image_type' => 'landscape',
            'work_id' => 5,
        ]);
        DB::table('portfolio')->insert([
            'work_location' => 6,
            'image_type' => 'portrait',
            'work_id' => 6,
        ]);
    }
}
