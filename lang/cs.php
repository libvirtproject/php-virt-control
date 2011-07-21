<?php
		$lang_name = 'Čeština (Czech)';
		$lang_code = 'cs';
		$trans = array(
					'title_vmc' => 'Ovládací panel virtuálních strojů',
					'for_php' => 'pro PHP',
					'version' => 'Verze',
					'website' => 'Stránka projektu',
					'conn_details' => 'Detaily připojení',
					'conn_uri' => 'URI připojení',
					'conn_encrypted' => 'Šifrování',
					'conn_secure' => 'Zabezpečení',
					'hypervisor_limit' => 'Limit hypervisoru',
					'hostname' => 'Jméno hostitele',
					'password' => 'Heslo',
					'Yes' => 'Ano',
					'No' => 'Ne',
					'host_details' => 'Detaily hostitele',
					'model' => 'Model',
					'pcpus' => 'Procesory/jádra',
					'cpu_speed' => 'Rychlost CPU',
					'modinfo' => 'Informace o PHP modulu (anglicky z PHPInfo)',
					'pool_not_running' => 'Neaktivní',
					'pool_building' => 'Staví se',
					'pool_running' => 'Běží',
					'pool_running_deg' => 'Běží degradovaně',
					'pool_running_inac' => 'Běží, ale není dostupný',
					'unknown' => 'Neznámo',
					'dom_running' => 'spuštěno',
					'dom_nostate' => 'beze stave',
					'dom_blocked' => 'blokováno',
					'dom_paused' =>  'zapauzovano',
					'dom_shutdown' => 'vypnuto',
					'dom_shutoff' => 'vypnuto',
					'dom_crashed' => 'havarováno',
					'cur_phys_size' => 'Aktuální fyzická velikost',
					'diskless' => 'bez disku',
					'changes' => 'Změny',
					'btn_apply' => 'Použít změny',
					'btn_discard' => 'Zahodit změny',
					'ask_apply' => 'Skutečně si přejete použít změny?',
					'ask_discard' => 'Skutečně si přejete zahodit změny?',
					'general' => 'Obecné',
					'description' => 'Popis',
					'vm_details' => 'Detaily virtuálního stroje',
					'host_pcpu_info' => 'Informace o procesorech hostitele',
					'max_per_guest' => 'Maximum pro VM',
					'vm_vcpu_info' => 'Informace o procesorech virtuálního stroje',
					'menu_overview' => 'Přehled',
					'menu_processor' => 'Procesor',
					'menu_memory' => 'Paměť',
					'menu_boot' => 'Bootování',
					'menu_disk' => 'Disková zařízení',
					'menu_network' => 'Síťová zařízení',
					'menu_multimedia' => 'Multimediální zařízení',
					'menu_hostdev' => 'Zařízení z hostitele',
					'menu_screenshot' => 'Snímek obrazovky',
					'host_mem_info' => 'Informace o paměti hostitele',
					'vm_mem_info' => 'Informace o paměti virtuálního stroje',
					'total_mem' => 'Celková paměť',
					'mem_alloc_cur' => 'Aktuální alokace',
					'mem_alloc_max' => 'Maximální alokace',
					'vm_boot_opts' => 'Nastavení bootovací sekvence virtuálního stroje',
					'vm_boot_dev1' => 'První boot zařízení',
					'vm_boot_dev2' => 'Druhé boot zařízení',
					'vm_boot_hdd' => 'Pevný disk',
					'vm_boot_cd' => 'CD-ROM',
					'vm_boot_fda' => 'Disketová mechanika',
					'vm_boot_pxe' => 'Síťový boot z PXE',
					'vm_boot_none' => 'žádné',
					'vm_disk_num' => 'Počet disků',
					'vm_disk_storage' => 'Úložiště',
					'vm_disk_type' => 'Typ ovladače',
					'vm_disk_dev' => 'Zařízení',
					'vm_disk_capacity' => 'Kapacita',
					'vm_disk_allocation' => 'Alokace',
					'vm_disk_physical' => 'Fyzická velikost',
					'vm_disk_remove' => 'Odstranit disk',
					'vm_disk_add' => 'Přidat disk',
					'vm_disk_details' => 'Detaily o diskových zařízeních',
					'vm_disk_askdel' => 'Skutečně si přejete smazat disk \'+disk+\' z domény?',
					'vm_disk_askadd' => 'Skutečně si přejete přidat disk do domény?',
					'vm_disk_image' => 'Obraz disku',
					'vm_disk_location' => 'Umístění',
					'vm_network_title' => 'Síťová zařízení stroje',
					'vm_network_num' => 'Počet karet',
					'vm_network_nic' => 'Síťová karta ',
					'vm_network_mac' => 'MAC Adresa',
					'vm_network_net' => 'Síť',
					'vm_network_type' => 'Typ karty',
					'vm_network_add' => 'Přidat novou kartu',
					'vm_network_del' => 'Odstranit kartu',
					'vm_network_askadd' => 'Skutečně si přejete přidat síťovou kartu do domény?',
					'vm_network_askdel' => 'Skutečně si přejete smazat síťovou kartu s MAC adresou \'+mac+\' z domény?',
					'info'	 => 'Informace',
					'vm_title' => 'Virtuální stroj',
					'vm_multimedia_title' => 'Multimediální zařízení stroje',
					'vm_multimedia_console' => 'Konzole',
					'vm_multimedia_input' => 'Vstupní zařízení',
					'vm_multimedia_graphics' => 'Grafické zařízení',
					'vm_multimedia_video' => 'Video zařízení',
					'details_readonly' => 'žádné (tato stránka je zatím pouze pro čtení)',
					'host_devices_title' => 'Zařízení předaná z hostitele',
					'host_devices' => 'Zařízení z hostitele',
					'hostdev_none' => 'žádná',
					'info_msg' => '<p>Toto je ovládací panel virtuálních strojů napsaný v jazyce PHP. Můžete jej '.
							'využít pro ovládání Vašich virtuálních strojů přes libvirt přímo z webového '.
							'rozhraní. Pro navigaci prosím použijte horní menu a vyberte doménu (virtuální stroj) '.
							'ze <i>Seznamu domén</i>. V seznamu domén uvidíte veškeré domény, které máte přístupné '.
							'přes libvirt. Pro správnou funkci potřebujete libvirt PHP modul nainstalovaný ve Vašem '.
							'webovém serveru. Pro více informací o připojení, hostitelském stroji a verzi modulu '.
							'prosím použijte odkaz <i>Informace</i> v horním menu.'.
							'<p>Hypervisor na hostitelském stroji je detekován automaticky, ačkoli je možné definici změnit '.
							'a zvolit si jiné nastavení, na který stroj se chcete připojit. Pro připojení se na vzdálený '.
							'stroj prosím použijte formulář níže. V případě problémů (např. nefunkční konektivita na vzdálený '.
							'systém za použití protokolu SSH) prosím zkontrolujte, zda máte všechny předpoklady pro připojení '.
							'splněny. Pro více informací podívejte na <a href="http://libvirt.org/auth.html" target="_blank">libvirt '.
                                                        'authentication documentation.</a> (anglicky)</p>',
					'conns'  => 'Připojení',
					'connname' => 'Název připojení',
					'hypervisor' => 'Hypervisor',
					'host_type' => 'Typ hostitele',
					'type_local' => 'Lokální',
					'type_remote' => 'Vzdálený',
					'host' => 'Hostitel',
					'logfile' => 'Soubor protokolu',
					'actions' => 'Akce',
					'log_opts' => 'Nastavení protokolování',
					'host_opts' => 'Nastavení hostitele',
					'save_conn' => 'Uložení připojení',
					'connect_new' => 'Připojit na hostitele',
					'change_conn' => 'Změnit nastavení připojení',
					'conn_method' => 'Metoda připojení',
					'user' => 'Uživatelské jméno',
					'conn_setup' => 'Nastavení připojení',
					'connect' => 'Připojit se',
					'conn_remove' => 'Odebrat připojení',
					'empty_disable_log' => 'Ponechte prázdné pro zakázání protokolování',
					'empty_disable_save' => 'Ponechte prázdné pokud si nepřejete uložit připojení',
					'conn_none' => 'Žádné připojení nebylo zatím definováno',
					'name'   => 'Název',
					'arch'   => 'Architektura',
					'vcpus'  => 'Procesory',
					'mem'    => 'Paměť',
					'disk/s' => 'Disk(y)',
					'nics'   => 'Síťové karty',
					'state'  => 'Stav',
					'id'	 => 'ID',
					'msg'	 => 'Zpráva',
					'dom_start' => 'Spustit doménu',
					'dom_stop'  => 'Zastavit doménu',
					'dom_destroy' => 'Zničit doménu',
					'dom_dumpxml' => 'Zobrazit XML konfiguraci domény',
					'dom_editxml' => 'Upravit XML konfiguraci domény',
					'dom_xmldesc' => 'XML konfigurace domény',
					'changed_uri' => 'Změněno nastavení připojovacího řetězce URI na ',
					'click_reload' => 'Klikněte zde pro obnovení a připojení pomocí nového připojovacího řetězce',
					'conn_saved' => 'Připojení bylo uloženo',
					'conn_failed' => 'Připojení selhalo',
					'domain_list' => 'Seznam domén',
					'dom_screenshot' => 'Snímek obrazovky',
					'settings' => 'Nastavení',
					'interval_sec' => 'Interval (sekund)',
					'change' => 'Změnit',
					'dom_none' => 'Žádná platná doména zde není definovaná',
					'main_menu' => 'Hlavní menu',
					'cannot_connect' => 'Nezdařilo se připojení k hypervisoru. Prosím zkontrolujte nastavení.',
					'language' => 'Jazyk',
					'using-ssh-auth' => 'Jak používat SSH authentizaci',
					'info-apache-key-copy' => 'K projektu php-virt-control je přibalena utilita <b>apache-key-copy</b> (možno nalézt v podadresáři tools), '.
								'která umožňuje nastavení SSH klíčů pro použití serverem Apache a jazykem PHP. Toto je užitečné především pro '.
								'nastavení SSH authentizace bez hesla (password-less authentization), protože SSH transport nepodporuje předávání '.
								'přihlašovacích informací SSH procesu a tedy je nezbytné použít tento typ authentizace pro SSH transport. Utilita '.
								'<b>apache-key-copy</b> musí být spuštěna v kontextu superuživatele root, aby byla schopná přepnutí do uživatele '.
								'apache i v případě, že uživatel nemá přiřazený žádný shell. Zde bude aplikace přistupovat domovský adresář '.
								'uživatele apache, kde vytvoří SSH klíč (pokud neexistuje) a zkopíruje veřejný klíč na vzdálený systém, který '.
								'chcete spravovat.'
					);
?>
