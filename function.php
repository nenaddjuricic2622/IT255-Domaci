<?php 


 function getBrowser() { 

            $user_agent = $_SERVER['HTTP_USER_AGENT']; 
            $bname = 'Unknown';
            $platform = 'Unknown';
            $version = "n/a";
            
            //Uzimamo OS
            if (preg_match('/linux/i', $user_agent)) {
               $platform = 'linux';
            }elseif (preg_match('/macintosh|mac os x/i', $user_agent)) {
               $platform = 'mac';
            }elseif (preg_match('/windows|win32/i', $user_agent)) {
               $platform = 'windows';
            }
            
            // Sledece uzimamo koji je browser
            if(preg_match('/MSIE/i',$user_agent) && !preg_match('/Opera/i',$user_agent)) {
               $bname = 'Internet Explorer';
               $ub = "MSIE";
            } elseif(preg_match('/Firefox/i',$user_agent)) {
               $bname = 'Mozilla Firefox';
               $ub = "Firefox";
            } elseif(preg_match('/Chrome/i',$user_agent)) {
               $bname = 'Google Chrome';
               $ub = "Chrome";
            }elseif(preg_match('/Safari/i',$user_agent)) {
               $bname = 'Apple Safari';
               $ub = "Safari";
            }elseif(preg_match('/Opera/i',$user_agent)) {
               $bname = 'Opera';
               $ub = "Opera";
            }elseif(preg_match('/Netscape/i',$user_agent)) {
               $bname = 'Netscape';
               $ub = "Netscape";
            }
            

            return array(
               'userAgent' => $user_agent,
               'name'      => $bname,
               'version'   => $version,
               'platform'  => $platform
            );
         }
		 
		function get_ip_address() {
			
			// check for shared internet/ISP IP
			if (!empty($_SERVER['HTTP_CLIENT_IP']) && validate_ip($_SERVER['HTTP_CLIENT_IP'])) {
				return $_SERVER['HTTP_CLIENT_IP'];
			}

			// check for IPs passing through proxies
			if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
				
				// check if multiple ips exist in var
				if (strpos($_SERVER['HTTP_X_FORWARDED_FOR'], ',') !== false) {
				
					$iplist = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
					foreach ($iplist as $ip) {
						if (validate_ip($ip))
							return $ip;
					}
				} else {
					
					if (validate_ip($_SERVER['HTTP_X_FORWARDED_FOR']))
						return $_SERVER['HTTP_X_FORWARDED_FOR'];
				}
			}
			
			if (!empty($_SERVER['HTTP_X_FORWARDED']) && validate_ip($_SERVER['HTTP_X_FORWARDED']))
				return $_SERVER['HTTP_X_FORWARDED'];
			
			if (!empty($_SERVER['HTTP_X_CLUSTER_CLIENT_IP']) && validate_ip($_SERVER['HTTP_X_CLUSTER_CLIENT_IP']))
				return $_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];
			
			if (!empty($_SERVER['HTTP_FORWARDED_FOR']) && validate_ip($_SERVER['HTTP_FORWARDED_FOR']))
				return $_SERVER['HTTP_FORWARDED_FOR'];
			
			if (!empty($_SERVER['HTTP_FORWARDED']) && validate_ip($_SERVER['HTTP_FORWARDED']))
				return $_SERVER['HTTP_FORWARDED'];

			// return unreliable ip since all else failed
			return $_SERVER['REMOTE_ADDR'];
		}

		/**
		* Ensures an ip address is both a valid IP and does not fall within
		* a private network range.
		*/
		function validate_ip($ip) {
			
			if (strtolower($ip) === 'unknown')
				return false;

			// generate ipv4 network address
			$ip = ip2long($ip);

			// if the ip is set and not equivalent to 255.255.255.255
			if ($ip !== false && $ip !== -1) {
			
			// make sure to get unsigned long representation of ip
			// due to discrepancies between 32 and 64 bit OSes and
			// signed numbers (ints default to signed in PHP)
			$ip = sprintf('%u', $ip);
			
			// do private network range checking
			if ($ip >= 0 && $ip <= 50331647) return false;
			if ($ip >= 167772160 && $ip <= 184549375) return false;
			if ($ip >= 2130706432 && $ip <= 2147483647) return false;
			if ($ip >= 2851995648 && $ip <= 2852061183) return false;
			if ($ip >= 2886729728 && $ip <= 2887778303) return false;
			if ($ip >= 3221225984 && $ip <= 3221226239) return false;
			if ($ip >= 3232235520 && $ip <= 3232301055) return false;
			if ($ip >= 4294967040) return false;
			}
			return true;
		}
		 
		 
?>		 