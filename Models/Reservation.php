<?php

class Reservation extends Model
{
    // Set the table name
    protected $table = 'reservaties';

    // Define the properties here. Make them 'protected' and add a docblock
    /**
     * @Type int(11)
     */
    protected $id;

    /**
     * @Type date
     */
    protected $lening;

    /**
     * @Type date
     */
    protected $teruggave;


    /**
     * @Type timestamp
     */
    protected $created_at;


    /**
     * @Type timestamp
     */
    protected $updated_at;

     /**
     * @Type int(11)
     */
    protected $users_id;

  
  

  // This method is called after filling the model with the values from the form and
    // before saving it to the database. You can add your own adjustments and checks here.
    // If a model shouldn't be saved, simply return false. Else return nothing, or true. Whatever.
    protected static function newModel($obj) {

    }

    public static function addReservation($form)
    {
        if(isset($_SESSION['errors']) && count($_SESSION['errors'])) {
            return false;
        }

        $reservation = new Reservation();
        $reservation->name = $form['name'];
        $reservation->lening = $form['lening'];
        $reservation->teruggave = $form['teruggave'];
        $reservation->created_at = $form['created_at'];
        $reservation->created_at = $form['updated_at'];
        $reservation->user_id = $form['users_id'];
        $reservation->pc = $form['pc'];
         // $reservation->beeldscherm = $form['beeldscherm'];
        // $reservation->voedingskabel = $form['voedingskabel'];
        // $reservation->adapter = $form['adapter'];
        // $reservation->hdmi_kabel = $form['hdmi_kabel'];
        // $reservation->computer_muis = $form['computer_muis'];
        // $reservation->toetsenbord = $form['toetsenbord'];
        // $reservation->lening = $form['lening'];
        // $reservation->teruggave = $form['teruggave'];
        $reservation->save();
    }

    public static function reservationForm()
    {
        $form = new Form();

        $form->addField((new FormField('pc'))
            ->type("number")
            ->name("name")
        ->placeholder('<img src="images/gra.png" width="48px" height="50px"> PCs'));

        return $form->getHTML();
    }

  
}
