<?php
/*
 *
 * OGP - Open Game Panel
 * Copyright (C) 2008 - 2016 The OGP Development Team
 *
 * http://www.opengamepanel.org/
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 *
 */

define('add_new_remote_host', "Dodaj nowe Zdalnego Host");
define('configured_remote_hosts', "Skonfigurowane zdalnych hostach");
define('remote_host', "Zdalnego Host");
define('remote_host_info', "Zdalny host musi być pingable hosta!");
define('remote_host_port', "Port zdalnego komputera");
define('remote_host_port_info', "Port, który jest słuchany przez podmiot OGP na zdalnym hoście. Domyślnie: 12.679.");
define('remote_host_name', "Nazwa zdalnego komputera");
define('ogp_user', "OGP Agent Username");
define('remote_host_name_info', "Nazwa zdalnego komputera jest używana, aby pomóc użytkownikom w określeniu ich serwerów.");
define('add_remote_host', "Dodaj Zdalnego Host");
define('remote_encryption_key', "Klucz szyfrowania zdalnego");
define('remote_encryption_key_info', "Klucza szyfrowania Remote służy do szyfrowania danych między stron internetowych i agencji. Ten klucz musi być jakiś na obu końcach.");
define('server_name', "Nazwa Serwera");
define('agent_ip_port', "Agent IP:Port");
define('agent_status', "Agent Status");
define('ips', "IPs");
define('add_more_ips', "Jeśli chcesz, aby wprowadzić więcej prasy IPs Set IP, gdy wszystkie pola są pełne i puste pole pojawi się.");
define('encryption_key_mismatch', "Encryption key does not match with the Agent. Please recheck your Agent configuration.");
define('no_ip_for_remote_host', "Należy dodać co najmniej jednego (1) adres IP dla każdego zdalnego komputera.");
define('note_remote_host', "A remote host is a server where the OGP agent is running on. Each host can have multiple number of IP addresses on which users can bind servers to.");
define('ip_administration', "Server &amp; IP Administration :: Open Game Panel");
define('unknown_error', "Unknown error - status_chk returned");
define('remote_host_user_name', "UNIX user");
define('remote_host_user_name_info', "Username where the Agent is running. Example: Jonhy");
define('remote_host_ftp_ip', "FTP IP");
define('remote_host_ftp_ip_info', "Serwer FTP <b>IP</b> dla obecnego agenta.");
define('remote_host_ftp_port', "FTP port");
define('remote_host_ftp_port_info', "Serwer FTP <b>Port</b> dla obecnego agenta.");
define('view_log', "Pokaż logi");
define('status', "Status");
define('stop_firewall', "Zatrzymaj zaporę");
define('start_firewall', "Uruchom zaporę");
define('seconds', "Sekund");
define('reboot', "Restart Serwera Hosta");
define('restart', "Zrestartuj Agenta");
define('confirm_reboot', "Are you sure you want to remotely reboot the entire physical server named '%s'?");
define('confirm_restart', "Czy na pewno chcesz zrestartować agenta o nazwie '%s'?");
define('restarting', "Restartowanie agenta... Proszę czekać.");
define('restarted', "Agent zrestartowany pomyślnie.");
define('reboot_success', "Server named '%s' was successfully rebooted. You will not be able to access the server until it has successfully booted.");
define('invalid_remote_host_id', "Invalid remote host id '%s' given.");
define('remote_host_removed', "Remote host called '%s' removed successfully.");
define('editing_remote_server', "Editing remote server called '%s'");
define('remote_server_settings_changed', "Changed settings for remote server '%s' successfully.");
define('save_settings', "Zapisz Ustawienia");
define('set_ips', "Ustaw IP");
define('remote_ip', "IP Hosta");
define('remote_ips_for', "Remote IPs for server called '%s'");
define('ips_set_for_server', "IPs set for server called '%s' successfully.");
define('could_not_remove_ip', "Could not remove old IP's from database.");
define('could_add_ip', "Could add remote server IP to database.");
define('areyousure_removeagent', "Czy jesteś pewny że chcesz usunąć agenta");
define('areyousure_removeagent2', "and all the homes related to it from the ogp database?");
define('error_while_remove', "Error occurred while removing remote server.");
define('add_ip', "Dodaj IP");
define('remove_ip', "Usuń IP");
define('edit_ip', "Edytuj IP");
define('wrote_changes', "Zmiany zapisane pomyślnie.");
define('there_are_servers_running_on_this_ip', "Na Adresie IP są uruchomione serwery.");
define('enter_ip_host', "Musisz wpisać IP dla serwera Hosta.");
define('enter_valid_ip', "You must enter valid port for the remote host. The port value can be between 0 and 65535, however recommendation is between 1024 and 65535.");
define('could_not_add_server', "Could not add server");
define('to_db', "to the database.");
define('added_server', "Dodaj serwer");
define('with_port', "z portem");
define('to_db_succesfully', "pomyślnie do bazy danych.");
define('unable_discover', "Unable to auto discover IPs on");
define('set_ip_manually', "You'll have to set them manually.");
define('found_ips', "Znaleziono IP");
define('for_remote_server', "dla serwera hosta.");
define('failed_add_ip', "Błąd przy dodawaniu IP");
define('timeout', "Time Out");
define('timeout_info', "Sekund.Termin, aby uzyskać odpowiedź od tego agenta.");
define('use_nat', "Użyj NAT");
define('use_nat_info', "Włącz, jeśli zdalny serwer używa reguły NAT.");
define('arrange_ports', "Arrange ports");
define('assign_new_ports_range_for_ip', "Assign new ports range for IP %s");
define('assigned_port_ranges_for_ip', "Assigned port ranges for IP %s");
define('assigned_ports_for_ip', "Assigned ports for IP %s");
define('unspecified_game_types', "Unspecified game types");
define('start_port', "Start port:");
define('end_port', "End port:");
define('port_increment', "Port increment:");
define('total_assignable_ports', "Total assignable ports:");
define('available_range_ports', "Available range ports:");
define('assign_range', "Assign range");
define('edit_range', "Edit range");
define('delete_range', "Delete range");
define('home_id', "Home ID");
define('home_path', "główna ścieżka:");
define('game_type', "Game type");
define('port', "Port");
define('invalid_values', "Invalid values.");
define('ports_in_range_already_arranged', "Ports in range already arranged.");
define('ports_range_already_configured_for', "Ports range already configured for %s.");
define('ports_range_added_successfull_for', "Ports range added successfully for %s.");
define('ports_range_deleted_successfull', "Ports range deleted successfully.");
define('ports_range_edited_successfull_for', "Ports range edited successfully for %s.");
define('editing_firewall_for_remote_server', "Editing Firewall for remote server named '%s'");
define('default_allowed', "Default allowed");
define('allow_port_command', "Allow port command");
define('deny_port_command', "Deny port command");
define('allow_ip_port_command', "Allow IP:port command");
define('deny_ip_port_command', "Deny IP:port command");
define('enable_firewall_command', "Enable firewall command");
define('disable_firewall_command', "Disable firewall command");
define('get_firewall_status_command', "Get firewall status command");
define('reset_firewall_command', "Reset firewall command");
define('firewall_status', "Firewall status");
define('save_firewall_settings', "Save firewall settings");
define('reset_firewall', "Reset Firewall");
define('firewall_settings', "Firewall Settings");
?>