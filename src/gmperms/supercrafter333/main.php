<?php

 namespace gmperms\supercrafter333;
 
 use pocketmine\event\Listener;
 use pocketmine\plugin\PluginBase;
 use pocketmine\command\Command;
 use pocketmine\command\CommandSender;
 use pocketmine\Player;


 class Main extends PluginBase implements Listener {

    public function onEnable()
    {
        $this->getLogger()->info("Gamemode-Perms by supercrafter333 wurde Aktiviert!");
    }

    public $fts;

    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args): bool
    {
        $fts = "[gamo]";
        $this->fts = $fts;

        if ($cmd->getName() == "gamo0") {
            if ($sender instanceof Player) {
                if ($sender->hasPermission("gamo.0")) {
                    $sender->setGamemode(0);
                    $sender->sendMessage("§c§oGM-Perms§r §8>> §6Du bist nun im Gamemode 0!");
                } else {
                    $sender->sendMessage("§c§oGM-Perms§r §8>> §cDu hast keine Rechte diesen Befehl zu benutzen!");
                    return true;
                }
            }
            return true;
        } 
        if ($cmd->getName() == "gamo1") {
            if ($sender instanceof Player) {
                if ($sender->hasPermission("gamo.1")) {
                    $sender->setGamemode(1);
                    $sender->sendMessage("§c§oGM-Perms§r §8>> §6Du bist nun im Gamemode 1!");
                } else {
                    $sender->sendMessage("§c§oGM-Perms§r §8>> §cDu hast keine Rechte diesen Befehl zu benutzen!");
                    return true;
                }
            }
            return true;
        }
        if ($cmd->getName() == "gamo2") {
            if ($sender instanceof Player) {
                if ($sender->hasPermission("gamo.2")) {
                    $sender->setGamemode(2);
                    $sender->sendMessage("§c§oGM-Perms§r §8>> §6Du bist nun im Gamemode 2!");
                } else {
                    $sender->sendMessage("§c§oGM-Perms§r §8>> §cDu hast keine Rechte diesen Befehl zu benutzen!");
                    return true;
                }
            }
            return true;
        } 
        if ($cmd->getName() == "gamo3") {
            if ($sender instanceof Player) {
                if ($sender->hasPermission("gamo.3")) {
                    $sender->setGamemode(3);
                    $sender->sendMessage("§c§oGM-Perms§r §8>> §6Du bist nun im Gamemode 3!");
                } else {
                    $sender->sendMessage("§c§oGM-Perms§r §8>> §cDu hast keine Rechte diesen Befehl zu benutzen!");
                    return true;
                }
            }
            return true;
        }
    }
 }