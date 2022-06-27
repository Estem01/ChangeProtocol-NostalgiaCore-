<?php

/*
 __PocketMine Plugin__
name=ChangeProtocol
version=1.0
author=Estem0
class=ChangeProtocol
apiversion=12,12.1
*/

class ChangeProtocol extends ServerEvent implements Plugin{

 public function __construct(ServerAPI $api, $server = false){
 $this->api = $api;
		$this->server = ServerAPI::request();
		$this->sessions = array();

		}
		
		 public function handle(&$data, $event){}
	
		public function DataPacketReceiveEvent(Player $player, RakNetDataPacket $packet){
		
		$this->api->addHandler("idk what it is handler", array($this, "handle"), 5);
		
		$this->packet = $packet;
		$this->player = $player;
		$this->packet = $event->getPacket();

		
	if(!$packet instanceof ProtocolInfo::LOGIN_PACKET:) {
            return;
        }
        if($packet->protocol1 !== ProtocolInfo::CURRENT_PROTOCOL){
        
       $packet->protocol = $currentProtocol; 
                $this->getLogger()->alert("§6{$player->getName()}'s protocol changed to {$currentProtocol}!");
        }
        }
        
        public function init(){}
        
        public function __destruct(){
	}
	}