<?php

namespace Database\Factories;

class personfactory extends Factory
{
protected $model = person::class;
public function definitation()
{
return[

    'name' => $this->faker->name(),
    'email' =>$this->faker->safeEmail(),
    'phone-number'=>$this->faker->phoneNumber(),
    'age'=>$this->faker->age(),
    'gender'=>$this->gender(['male','female']),
];
   }
     }
