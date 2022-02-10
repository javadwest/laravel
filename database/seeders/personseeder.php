<?php

namespace Database\Seeders;

class personseeder extends Seeder
{
public function run(){
$faker =\Faker\Factory::create();
DB::table('persons')->insert([
'name'=> $this->$faker->name(),
'email'=> $this->$faker->safeEmail(),
'phone_number'=>$this->$faker->phoneNumber(),
'age'=>$this->$faker->$this->age(),
'gender'=>$this->$faker->$this->gender(['male','female']),

]);

}
}
