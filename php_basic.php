<?php 
 class Player {
   private $name, $blood, $mana;
   
   public function __construct($new_name) {
     $this->name = $new_name;
     $this->blood = 100;
     $this->mana = 80;
   }
   
   public function get_name() {
     return $this->name;
   }
   public function set_name($input_name) {
     $this->name = $input_name;
   }
   public function get_blood() {
     return $this->blood;
   }
   public function get_mana() {
     return $this->mana;
   }
   
   public function attack() {
     $mana = $mana - 10;
   }
   
   public function defend() {
     $blood = $blood - 30;
   }
 }
 
 $players = [];

echo 
    "# ============================== #

      # Welcome to the Battle Arena #
      # ============================== #
      # Description: #
      # 1 type 'new' to create a character #
      # 2. type 'start' to begin the fight #
      # Current Player: #
      # - #
      # * Max player 2 or 3 #
      # ------------------------------------------------- ---- #
      # Mode: ";
      // input mode player
      fscanf(STDIN, "%s\n", $mode);
      echo"\n";
          if ($mode =="new") 
          {
            echo "
              # ============================== #
              # Welcome to the Battle Arena #
              # ============================== #
              # New Player #
              # Put Player 1 Name:";
            // input name
              fscanf(STDIN, "%s\n", $player_name_1);
              $players [$player_1] = new Player ($player_name_1);
              echo "var_dump($player_name_1)";
              
              if ($players == [1])
              {
              echo "
              # Put Player 2 Name:"; 
             fscanf(STDIN, "%s\n", $player_name_2);
             $players [$player_2] = new Player ($player_name_2);
                        # - #
                        # * Max player 2 or 3 #
                        # ----------------------------------------------------- #
                        # How much player:";
                        fscanf(STDIN, "%s\n", $much_player);
                    }
              else
                    {
                      echo "string";                   
                    }
           
            
              
          }

          else
          {
            echo "
            # ============================== #
            # Welcome to the Battle Arena #
            # ------------------------------------------------- ---- #
            Battle Start:
            who will attack: <nama_player_1>
            who attacked
            : <Nama_player_2>
            when pressing enter out the results:
            # ============================== #
            # Welcome to the Battle Arena #
            # ------------------------------------------------- ---- #";
          }


// $player = [$input] new Player ($input);
// echo "$player";
  // if
  // {
  //   $input="new";
  //   {

  //   }
  // }

      # Current Player: #
      # - #
      # * Max player 2 or 3 #
# ============================== #;
  // public $players = [];

  // $players["ujang"] = new Player("ujang");
  // $players["cecep"] = new Player("cecep");
  
  // $players["ujang"]->get_blood();
  
  // //ujang will decrease the mana with -10
  // $players["ujang"]->attack();
  // //cecep will decrease the blood with -30
  // $players["cecep"]->defend();
 
 ?>
