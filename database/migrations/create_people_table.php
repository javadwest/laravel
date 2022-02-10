<?php

class create_people_table extends Migration
{
public function up(){
Schema::create('persons',function (Blueprint $table){
$table->id();
$table->string('name',120);
$table->string('email',80);
$table->integer('age')->unsigned();
$table->string('phone-number',20);
$table->enum('gender',['male','female']);
$table->timestamps();
});
}
public function down()
{
Schema::dropIfExits('persons');
  }
}
