<?php

use Illuminate\Database\Seeder;

class VenuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('venues')->insert([
            'name' => 'Swing Station',
            'address' => '3311 West CR 54G',
            'city' => 'LaPorte',
            'state' => 'CO',
            'zip_code' => '80535',
            'description' => 'RIDE YOUR BIKE FOR $1 OFF ALL COLORADO DRAFTS, 2 LIVE MUSIC STAGES - INDOOR AND OUTDOOR, HAPPY HOUR 3-7PM - MONDAY - THURSDAY, OPEN MIC EVERY WEDNESDAY NIGHT, HUGE OUTDOOR PATIO, SMOKING AREA, DANCE FLOOR, HORSESHOES, CORNHOLE, RING SWING, POOL TABLE, DARTBOARDS, SHUFFLEBOARD, AND MUCH MORE!',
            'image_url' => null,
        ]);

        DB::table('venues')->insert([
            'name' => '502 Bar',
            'address' => '502 Embassy Oaks',
            'city' => 'San Antonio',
            'state' => 'TX',
            'zip_code' => '78216',
            'description' => 'Karaoke every monday, Open mic every Sunday.',
            'image_url' => null,
        ]);

        DB::table('venues')->insert([
            'name' => 'The Korova',
            'address' => '107 E Martin St',
            'city' => 'San Antonio',
            'state' => 'TX',
            'zip_code' => '78205',
            'description' => 'Located at 107 E Martin in the heart of downtown San Antonio, The Korova has finally escaped from being the city’s darkhorse venue to making strides going into their 5th year to establish themselves as one of the premiere mid-size live music venues in San Antonio. With subtle artistic touches of Kubrick film noir created by Nik Soupe, (SA Current’s Artist of the Year in 2013 & 2014), the aesthetics of The Korova provide guests with a unique atmosphere to capture underground up & coming acts from all over the globe, along with legends of the past as well as local heroes.',
            'image_url' => null,
        ]);

        DB::table('venues')->insert([
            'name' => 'Paper Tiger',
            'address' => '2410 N St Marys St',
            'city' => 'San Antonio',
            'state' => 'TX',
            'zip_code' => '78212',
            'description' => 'We opened Paper Tiger because we wanted to give San Antonio the live music venue it deserves.  We are collaborating with Margin Walker to bring national touring bands and had previously bypassed our fair city,  and we are actively booking local and regional bands in our small room.',
            'image_url' => null,
        ]);

        DB::table('venues')->insert([
            'name' => 'Alamo City Music Hall & Club',
            'address' => '1305 E Houston St',
            'city' => 'San Antonio',
            'state' => 'TX',
            'zip_code' => '78202',
            'description' => 'Touring & local acts (from rock & metal to rap & rave) in a warehouse-style setting with a full bar.',
            'image_url' => null,
        ]);

        DB::table('venues')->insert([
            'name' => 'AT&T Center',
            'address' => '1 AT&T Center Parkway',
            'city' => 'San Antonio',
            'state' => 'TX',
            'zip_code' => '78219',
            'description' => 'The AT&T Center is a multi-purpose indoor arena on the east side of San Antonio, USA. It seats 18,418 for basketball, 16,151 for ice hockey, and 19,000 for concerts or gatherings, and contains 2,018 club seats, 50 luxury suites and 32 bathrooms.',
            'image_url' => null,
        ]);

        DB::table('venues')->insert([
            'name' => 'The Aztec Theatre',
            'address' => '104 N St Marys St',
            'city' => 'San Antonio',
            'state' => 'TX',
            'zip_code' => '78205',
            'description' => 'The Aztec Theatre is a premier historical multi-purpose entertainment and events facility. Located in the heart of downtown at the corner of Commerce St. and St. Mary\'s St., the Aztec Theatre in one of the Alamo City\'s most cherished architectural and historical landmarks.',
            'image_url' => null,
        ]);

        DB::table('venues')->insert([
            'name' => 'Emo\'s ',
            'address' => '2015 E Riverside Dr',
            'city' => 'Austin',
            'state' => 'TX',
            'zip_code' => '78741',
            'description' => 'Emo\'s has and always will be a little rough around the edges. Originating in the punk rock trenches of the Red River Music District in the early 90’s, the initial venue brought an authentic personality that helped shape Austin’s thriving live music scene. The new venue, formally the influential Back Room, now boasts a state-of-the-art sound system, complete with quality lighting and staging capabilities. With the history of two legendary Austin venues in its blood, the rock ‘n’ roll spirit lives on at 2015 East Riverside Drive.',
            'image_url' => null,
        ]);

        DB::table('venues')->insert([
            'name' => 'Parish',
            'address' => '214 E 6th St',
            'city' => 'Austin',
            'state' => 'TX',
            'zip_code' => '78701',
            'description' => 'Live hip-hop, rock, funk, reggae, Latin & more attract music-lovers to this 6th Street club.',
            'image_url' => null,
        ]);

        DB::table('venues')->insert([
            'name' => 'ACL Live at The Moody Theater',
            'address' => '2nd Street District, 310 W 2nd St',
            'city' => 'Austin',
            'state' => 'TX',
            'zip_code' => '78701',
            'description' => 'Austin City Limits at the Moody Theater hosts diverse performers, from Belle & Sebastian to ZZ Top.',
            'image_url' => null,
        ]);

        DB::table('venues')->insert([
            'name' => 'Stubb\'s Bar-B-Q Restaurant',
            'address' => '801 Red River St',
            'city' => 'Austin',
            'state' => 'TX',
            'zip_code' => '78701',
            'description' => 'Beer, brisket and music Downtown with a renowned Sunday gospel brunch.',
            'image_url' => null,
        ]);

        DB::table('venues')->insert([
            'name' => 'Red 7',
            'address' => '611 E 7th St',
            'city' => 'Austin',
            'state' => 'TX',
            'zip_code' => '78701',
            'description' => 'Intimate performance space with indoor & outdoor stages plus full bar.',
            'image_url' => null,
        ]);

        DB::table('venues')->insert([
            'name' => 'Warehouse Live',
            'address' => '813 St Emanuel St',
            'city' => 'Houston',
            'state' => 'TX',
            'zip_code' => '77003',
            'description' => 'Various music styles are showcased at this basic general-admission concert venue with a small bar.',
            'image_url' => null,
        ]);

        DB::table('venues')->insert([
            'name' => 'Fitzgerald\'s',
            'address' => '2706 White Oak Dr',
            'city' => 'Houston',
            'state' => 'TX',
            'zip_code' => '77007',
            'description' => 'All-ages music venue hosting well-known bands & local acts in a funky, two-story setting since 1977.',
            'image_url' => null,
        ]);

        DB::table('venues')->insert([
            'name' => 'House of Blues Houston',
            'address' => 'GreenStreet, 1204 Caroline St',
            'city' => 'Houston',
            'state' => 'TX',
            'zip_code' => '77002',
            'description' => 'Rock- & blues-themed chain with Southern dishes such as po\' boys & jambalaya, plus live music.',
            'image_url' => null,
        ]);

        DB::table('venues')->insert([
            'name' => 'Toyota Center',
            'address' => '1510 Polk St',
            'city' => 'Houston',
            'state' => 'TX',
            'zip_code' => '77002',
            'description' => 'Toyota Center is an indoor arena located in downtown Houston, Texas. It is named after the Japanese automobile manufacturer Toyota.',
            'image_url' => null,
        ]);

        DB::table('venues')->insert([
            'name' => 'Cynthia Woods Mitchell Pavilion',
            'address' => '2005 Lake Robbins Dr',
            'city' => 'The Woodlands',
            'state' => 'TX',
            'zip_code' => '77380',
            'description' => 'The Cynthia Woods Mitchell Pavilion, sometimes called The Woodlands Pavilion or simply The Pavilion, is a concert amphitheatre located in The Woodlands, Texas, an outer suburb of Houston, Texas',
            'image_url' => null,
        ]);

        DB::table('venues')->insert([
            'name' => 'Granada Theater',
            'address' => '3524 Greenville Ave',
            'city' => 'Dallas',
            'state' => 'TX',
            'zip_code' => '75206',
            'description' => 'Compact, buzzy live music venue & event space in a historic art deco theater with full bar.',
            'image_url' => null,
        ]);

        DB::table('venues')->insert([
            'name' => 'The Bomb Factory',
            'address' => '2713 Canton St',
            'city' => 'Dallas',
            'state' => 'TX',
            'zip_code' => '75226',
            'description' => 'Roomy live music & event venue with a capacity of 4,300, offering touring national & local acts.',
            'image_url' => null,
        ]);

        DB::table('venues')->insert([
            'name' => 'Dada Dallas',
            'address' => '2720 Elm St',
            'city' => 'Dallas',
            'state' => 'TX',
            'zip_code' => '75226',
            'description' => 'All-ages venue for live music performed on a huge outdoor patio by local rockers.',
            'image_url' => null,
        ]);

        DB::table('venues')->insert([
            'name' => 'American Airlines Center',
            'address' => '2500 Victory Ave, Dallas, TX 75219',
            'city' => 'Dallas',
            'state' => 'TX',
            'zip_code' => '75219',
            'description' => 'The American Airlines Center is a multi-purpose arena, located in the Victory Park neighborhood, near downtown Dallas, Texas.',
            'image_url' => null,
        ]);

        DB::table('venues')->insert([
            'name' => 'Scoot Inn',
            'address' => '1308 E 4th St',
            'city' => 'Austin',
            'state' => 'TX',
            'zip_code' => '78702',
            'description' => 'Eclectic indie bands & a dance floor in a happening, compact dive with 2 bars & lots of beer.',
            'image_url' => null,
        ]);

        DB::table('venues')->insert([
            'name' => 'Majestic Theatre',
            'address' => '224 E Houston St, San Antonio, TX 78205',
            'city' => 'San Antonio',
            'state' => 'TX',
            'zip_code' => '78205',
            'description' => 'The Majestic Theatre is San Antonio\'s oldest and largest atmospheric theatre. The theatre seats 2,311 people and was designed by architect John Eberson, for Karl Hoblitzelle\'s Interstate Theatres in 1929',
            'image_url' => null,
        ]);
    }
}
