<?php
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

/*
class Category extends Eloquent
{

}
class Chamber extends Eloquent
{

}
class Disease extends Eloquent
{

}
class DiseaseDrug extends Eloquent
{

}
class Disease_symptom extends Eloquent
{

}
*/

class Doctor extends Eloquent implements UserInterface, RemindableInterface
{
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}
	public function getRememberToken()
	{
		return $this->remember_token;
	}
	public function setRememberToken($value)
	{
		$this->remember_token = $value;
	}
	public function getRememberTokenName()
	{
		return 'remember_token';
	}
	public function getAuthPassword()
	{
		return $this->doctor_password;
	}
	public function getReminderEmail()
	{
		return $this->doctor_email;
	}
}

/*
class Doctor_review extends Eloquent
{

}
class Drug extends Eloquent
{

}
class Drug_review extends Eloquent
{

}
class Hospital extends Eloquent
{

}
class Hospital_review extends Eloquent
{

}
class Symptom extends Eloquent
{

}

class User extends Eloquent
{

}
*/