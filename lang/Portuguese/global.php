<?php
/*
 *
 * OGP - Open Game Panel
 * Copyright (C) 2008 - 2017 The OGP Development Team
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

define('lang_charset', "UTF-8");
define('already_logged_in_redirecting_to_dashboard', "Desculpe, mas você já tem sessão iniciada, será agora redireccionado para a pagina de inicio.");
define('logging_in', "<center>Sessão iniciada com sucesso, Por favor aguarde,,.</center>");
define('redirecting_in', "Você esta a ser redireccionado, por favor aguarde...");
define('refresh_page', "Atualizar Página");
define('no_rights', "Você não tem privilégios suficientes para acessar esta página.");
define('welcome', "Seja bem vindo");
define('logout', "Sair");
define('logout_message', "Você acabou de terminar a sessão, agradecemos a sua visita!");
define('support', "Suporte");
define('password', "Senha");
define('login', "Usuário");
define('login_button', "Entrar");
define('solve_captcha', "Verificação humana");
define('lost_passwd', "Perdeu a sua senha?");
define('no_db_connection', "Não é possível conectar ao banco de dados.");
define('bad_login', "Senha ou nome de usuário incorrectos.");
define('not_logged_in', "Você está logado no painel de controle.");
define('remove_install', "Por favor remova o arquivo install.php por motivos de segurança.");
define('agent_offline', "O agente que controla o servidor está desativado, rode-o na máquina remota.");
define('logged_in', "Você está logado como");
define('delete', "Deletar");
define('edit', "Editar");
define('actions', "Ações");
define('invalid_subpage', "Subpágina inválida");
define('invalid_home_id', "Home ID inserida é invalida.");
define('note', "NOTA");
define('hint', "HINT");
define('yes', "Sim");
define('no', "Não");
define('on', "Ligado");
define('off', "Desligado");
define('db_error_invalid_host', "Foi inserido um host de banco de dados inválido.");
define('db_error_invalid_user_and_pass', "Nome de usuário ou senha de banco de dados inválido.");
define('db_error_invalid_database', "Banco de dados invalido.");
define('db_unknown_error', "Erro de banco de dados não declarado %s");
define('db_error_module_missing', "Falta o módulo de banco de dados do PHP.");
define('db_error_invalid_db_type', "Tipo de banco de dados inválido no arquivo de configuração.");
define('invalid_login_information', "Tipo de banco de dados inválido no arquivo de configuração.");
define('failed_to_read_config', "Falha ao ler o arquivo de configuração.");
define('account_expired', "Sua conta expirou.");
define('contact_admin_to_enable_account', "Verifique na área do cliente sua conta ou entre em contacto com o administrador para reactivar a sua conta.");
define('maintenance_mode_on', "O modo de manutenção está ligado");
define('logging_out_10', "A deslogar da sua conta em 10 segundos");
define('invalid_redirect', "A rederecionar...");
define('login_title', "Control Panel Login");
define('module_not_installed', "Pedimos desculpa, mas no momento não é possível avançar com o seu pedido.");
define('no_access_to_home', "Você não tem acesso a home.");
define('not_available', "Sem informação disponível");
define('offline', "Offline");
define('online', "Online");
define('invalid_url', "URL Inválida");
define('xml_file_not_valid', "Arquivo XML '%s' Não pôde ser validado com esquema '%s'.");
define('unable_to_load_xml', "Incapaz de carregar XML Arquivo '%s'. Problema de permissão?");
define('gamemanager', "Gerir Jogos");
define('game_monitor', "Monitor de Jogos");
define('dashboard', "Painel Inicial");
define('user_addons', "Addons");
define('ftp', "FTP");
define('shop', "Loja");
define('shop_guest', "Loja de Compras");
define('TS3Admin', "TS3 Admin");
define('administration', "Administração");
define('config_games', "Game/Mod Config");
define('modulemanager', "Modules");
define('server', "Servidores");
define('settings', "Configurações do painel");
define('themes', "Definições de tema");
define('user_admin', "Usuários");
define('sub_users', "Sub Usuários");
define('show_groups', "Grupos");
define('user_games', "Servidores Jogos");
define('addons_manager', "Gerir Addons");
define('ftp_admin', "Usuários FTP");
define('orders', "Compras");
define('services', "Serviços");
define('shop_settings', "Configurações Loja");
define('update', "Atualizar painel");
define('extras', "Extras");
define('show', "Mostrar");
define('show_all', "Mostrar todos os servidores");
define('cur_theme', "Tema %s");
define('copyright', "Copyright");
define('all_rights_reserved', "Todos os direitos reservados");
define('version', "Versão");
define('show_version', "Mostrar versão");
define('queries_executed', "queries executed");
define('lang', "Idioma");
define('get_size', "Mostrar tamanho");
define('total_size', "Tamanho total");
define('lgsl', "Lista de servidores de jogo\"s\" ao vivo");
define('lgsl_admin', "Live Game Server List Admin");
define('rcon', "RCON");
define('watch_logger', "Logs do Servidor");
define('litefm_settings', "Config. LiteFileManeger");
define('assign_expiration_date', "Data em que ira expirar a app/servidor");
define('assign_expiration_date_info', "Uma vez que expira, o servidor não está atribuído mas não foi removido.");
define('server_expiration_date', "Data de expiração do servidor");
define('server_expiration_date_info', "Uma vez que expira o servidor é removido (banco de dados e arquivos).");
define('set_expiration_date', "Definir Data de Expiração");
define('admin_dsi', "Config. Imagem Dinâmica de Servidor\"es\"");
define('user_dsi', "Imagem Dinâmica de Servidor");
define('list_dsi', "Lista de Servidores de Jogos Ativos");
define('no_remote_servers', "Não há servidores remotos conhecidos! Adicione um servidor para usar esta função.");
define('no_results_found', "Não foram encontrados resultados de pesquisa para %s");
define('tickets', "Tickets de Suporte");
define('news', "Noticias");
define('admin_news', "Notícias de Administrador");
define('rcon', "RCON");
define('support', "Suporte");
define('util', "Serviços de utilidade");
define('fast_download', "Download Rápido");
define('fd_user', "Download Rápido");
define('cron', "Cron -programador de tarefas- de administrador");
define('user_cron', "Programador de tarefas CRON");
define('faq', "Perguntas Frequentes");
define('mysql_admin', "MySQL Admin");
?>
