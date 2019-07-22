<?php namespace Dizoo\Partners\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDizooPartnersMain extends Migration
{
    public function up()
    {
        Schema::create('dizoo_partners_main', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 255);
            $table->string('url', 255);
            $table->integer('sort_order')->nullable();
            $table->boolean('active')->default(1);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dizoo_partners_main');
    }
}
