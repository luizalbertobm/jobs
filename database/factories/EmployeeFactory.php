<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName,
            'email' => strtolower($this->faker->firstName()).'@'.$this->faker->freeEmailDomain,
            'phone' => $this->faker->e164PhoneNumber,
            'hire_date' => $this->faker->dateTimeThisDecade($max = 'now'),
            'job_id' => 1,
            'salary' => $this->faker->randomFloat(2, 650, 3000),
            'commission' => $this->faker->randomFloat(2, 0, 400),
            'manager_id' => null,
            'department_id' => 1,
        ];
    }
}
