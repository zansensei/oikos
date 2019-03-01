<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CreateBrandTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brand', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 255);
            $table->string('image', 255);
            $table->string('title', 150);
            $table->string('subtitle', 255);
            $table->timestamps();
        });
        DB::table('brand')->insert([
            'name' => 'Aerogarden',
            'image' => 'img/aerogarden/aerogarden-slide.jpg',
            'title' => 'Aerogarden',
            'subtitle' => 'AeroGarden avec kit de graine de plante',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('brand')->insert([
            'name' => 'Altered',
            'image' => 'img/altered/altered-slide.jpg',
            'title' => 'Altered',
            'subtitle' => 'Réduire sa consomation d\'eau',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('brand')->insert([
            'name' => 'Bob',
            'image' => 'img/bob/bob-slide.jpg',
            'title' => 'Bob',
            'subtitle' => 'Le premier lave-vaisselle autonome et ultra-compact',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('brand')->insert([
            'name' => 'Nebia',
            'image' => 'img/nebia/nebia-slide.jpg',
            'title' => 'Nebia',
            'subtitle' => 'Douche durable',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('brand')->insert([
            'name' => 'Nest',
            'image' => 'img/nest/nest-slide.jpg',
            'title' => 'Nest',
            'subtitle' => 'Régulateur énergetique',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('brand')->insert([
            'name' => 'Qrad',
            'image' => 'img/qrad/qrad-slide.jpg',
            'title' => 'Qrad',
            'subtitle' => 'Radiateur numérique',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('brand')->insert([
            'name' => 'Solargaps',
            'image' => 'img/solargaps/solargpas-slide.jpg',
            'title' => 'Solargaps',
            'subtitle' => 'Stores à énergie solaire',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('brand')->insert([
            'name' => 'Towergarden',
            'image' => 'img/towergarden/towergarden-slide.jpg',
            'title' => 'Towergarden',
            'subtitle' => 'Jardin d\'interieur',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('brand')->insert([
            'name' => 'Zera',
            'image' => 'img/zera/zera-slide.jpg',
            'title' => 'Zera',
            'subtitle' => 'Compost for the people',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('brand');
    }
}
