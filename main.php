<?php 

require_once("./classes/Human.php");
require_once("./classes/Enemy.php");
require_once("./classes/Brave.php");
require_once('./classes/BlackMage.php');
require_once('./classes/WhiteMage.php');

$tiida = new Brave("ティーダ");
$goblin = new Enemy("ゴブリン");


echo $tiida->getName()."\n";
echo $goblin->getName()."\n";

$turn = 1;

while($tiida->getHitPoint() > 0 && $goblin->getHitPoint() > 0){
  echo "*** $turn ターン目 ***\n\n";

  echo $tiida->getName().":".$tiida->getHitPoint()."/".$tiida::MAX_HITPOINT."\n";
  echo $goblin->getName().":".$goblin->getHitPoint()."/".$goblin::MAX_HITPOINT."\n";

  $tiida->doAttack($goblin);
  echo "\n";
  $goblin->doAttack($tiida);
  echo "\n";

  $turn++;

}

echo "★★★ 戦闘終了 ★★★\n\n";
echo $tiida->getName() . "　：　" . $tiida->getHitPoint() . "/" . $tiida::MAX_HITPOINT . "\n";
echo $goblin->getName() . "　：　" . $goblin->getHitPoint() . "/" . $goblin::MAX_HITPOINT . "\n\n";

?>