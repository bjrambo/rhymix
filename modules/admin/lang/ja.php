<?php
$lang->admin = '管理者';
$lang->cmd_configure = '設定する';
$lang->subtitle_primary = '基本設定';
$lang->subtitle_security = 'セキュリティ設定';
$lang->subtitle_advanced = '上級設定';
$lang->subtitle_etc = 'その他設定';
$lang->current_state = '現況';
$lang->latest_documents = '新着書き込み';
$lang->latest_comments = '新着コメント';
$lang->latest_trackbacks = '新着トラックバック';
$lang->notices = 'お知らせ';
$lang->favorites = 'お気に入り';
$lang->admin_info = '管理者情報';
$lang->admin_index = '管理者トップページ';
$lang->control_panel = 'ダッシュボード';
$lang->site_title = 'サイトタイトル';
$lang->start_module = 'ホームページ';
$lang->about_site_title = '詳細設定でサイトタイトルを設定しなかった場合に表示されるタイトルです。';
$lang->about_start_module = 'サイトへ接続した際に表示される基本モジュールを指定することができます。';
$lang->select_site = 'サイト選択';
$lang->select_module_type = 'モジュールタイプ';
$lang->select_module_instance = 'ページ選択';
$lang->module_category_title['service'] = 'サービス管理';
$lang->module_category_title['member'] = '会員管理';
$lang->module_category_title['content'] = 'コンテンツ管理';
$lang->module_category_title['statistics'] = '統計閲覧';
$lang->module_category_title['construction'] = 'サイト設定';
$lang->module_category_title['utility'] = '機能設定';
$lang->module_category_title['interlock'] = '連動設定';
$lang->module_category_title['accessory'] = '付加機能設定';
$lang->module_category_title['migration'] = 'データ管理／復元';
$lang->module_category_title['system'] = 'システム管理';
$lang->menu_gnb['dashboard'] = 'ダッシュボード';
$lang->menu_gnb['menu'] = 'サイト制作・編集';
$lang->menu_gnb['user'] = '会員';
$lang->menu_gnb['content'] = 'コンテンツ';
$lang->menu_gnb['configuration'] = '設定';
$lang->menu_gnb['advanced'] = '上級';
$lang->advanced_settings = '上級設定';
$lang->newest_news = '新着ニュース';
$lang->env_setup = '環境設定';
$lang->default_url = '基本URL';
$lang->about_default_url = '複数のサイトを運営する際に基本URLが必要です。Rhymixインストール先を含むURLを入力してください。(例：http://ドメイン/インストール先)';
$lang->env_information = '環境情報';
$lang->current_version = 'インストールされているバージョン';
$lang->current_path = 'インストール先';
$lang->released_version = '最新バージョン';
$lang->about_download_link = '新しいバージョンが配布されています。｢ダウンロード｣リンクをクリックするとダウンロードできます。';
$lang->item_addon = 'アドオンリスト';
$lang->item_widget = 'ウィジェットリスト';
$lang->item_layout = 'レイアウトリスト';
$lang->module_name = 'モジュール名';
$lang->addon_name = 'アドオン名';
$lang->version = 'バージョン';
$lang->table_count = 'テーブル数';
$lang->installed_path = 'インストール先';
$lang->cmd_shortcut_management = 'メニューの編集';
$lang->msg_is_not_administrator = '管理者のみアクセスできます。';
$lang->msg_manage_module_cannot_delete = 'モジュール、アドオン、レイアウト、ウィジェットモジュールのショートカットは削除できません。';
$lang->msg_default_act_is_null = 'デフォルトの管理者アクションが指定されていないため、ショートカットを登録することができません。';
$lang->welcome_to_xe = 'Rhymixの管理者ページです。';
$lang->about_lang_env = '初めてサイトに訪問したユーザーに、上記での選択言語でサイトを表示させるためには、必ず下記の「保存」ボタンをクリックして適用してください。';
$lang->xe_license = 'RhymixのライセンスはGPLです。';
$lang->yesterday = '昨日';
$lang->today = '今日';
$lang->default_lang = 'デフォルト言語選択';
$lang->lang_select = 'サポート言語選択';
$lang->about_recompile_cache = '不要もしくは、無効なキャッシュファイルを削除しますか？';
$lang->confirm_run = '時間がかかる場合があります。実行しますか？';
$lang->use_ssl = '<abbr title="Secure Sockets Layer">SSL</abbr>を使用';
$lang->ssl_options['none'] = '使わない';
$lang->ssl_options['optional'] = '部分的に使う（推奨しない）';
$lang->ssl_options['always'] = '常に使う（推奨）';
$lang->about_use_ssl = '「部分的に使う」は、「会員登録/会員情報変更」など指定されたアクションでSSLを使います。「常に使う」は、すべてのサービスにSSLを使います。SSLサーバ証明書がインストールされてない場合での使用はお控えください。サイトへのアクセスができない場合があります。';
$lang->server_ports = 'サーバーポート指定';
$lang->about_server_ports = '一般的に使われているHTTPの80、HTTPSの443以外の他のポートを使うには、ポートを指定してください。';
$lang->use_db_session = 'DBで認証セッション管理';
$lang->about_db_session = '認証の際に使われるPHPセッションをDBで使う機能です。 ウェブサーバーの負荷が低いサイトではこの機能をオフにすることでサイトのレスポンスが向上されることもあります。 ただし、この機能をオフにすると、「現在ログイン中の会員」の機能を利用できなくなります。';
$lang->qmail_compatibility = 'Qmail使用';
$lang->minify_scripts = 'スクリプト自動圧縮';
$lang->cmd_minify_all = '全てのファイルを圧縮';
$lang->cmd_minify_common = '共通のファイルを圧縮';
$lang->cmd_minify_none = '圧縮されません';
$lang->about_minify_scripts = 'コアとすべてのモジュールに含まれたCSS、JSファイルを自動的に圧縮(minify)して配信します。';
$lang->concat_scripts = 'スクリプト自動結合';
$lang->cmd_concat_none = '結合しません';
$lang->cmd_concat_css_only = 'CSSのみ結合';
$lang->cmd_concat_js_only = 'JSのみ結合';
$lang->cmd_concat_css_js = 'CSSやJSの両方を結合';
$lang->about_concat_scripts = 'CSS、JSファイルを一つにまとめて送信されます。外部からロードするスクリプトは、合わせてされません.';
$lang->use_server_push = 'HTTP/2 Server Push使用';
$lang->use_gzip = 'gzip 圧縮';
$lang->delay_session = 'セッションの開始を遅延';
$lang->about_delay_session = 'Varnishなどのプロキシキャッシュサーバ使用時のパフォーマンスを向上させるために、ログインしていないユーザーには、認証セッションを付与しません。<br>このオプションを選択した場合、訪問者数とヒット集計が正確でない場合があります。';
$lang->use_object_cache = 'キャッシュ使用';
$lang->cache_host = 'ホスト';
$lang->cache_port = 'ポート';
$lang->cache_dbnum = 'DB番号';
$lang->msg_cache_handler_not_supported = '選択したキャッシュ方式をサーバーでサポートされていないか、与えられた情報でキャッシュにアクセスすることができません。';
$lang->msg_invalid_default_url = '基本URLが正しくありません。';
$lang->msg_default_url_ssl_inconsistent = 'SSLを常に使用する場合、基本URLもhttps：//で始まる必要があります。';
$lang->msg_default_url_http_port_inconsistent = 'HTTPポートを変更する場合、基本URLも同じポートが含まれている必要があります。';
$lang->msg_default_url_https_port_inconsistent = 'HTTPSポートを変更する場合、基本URLも同じポートが含まれている必要があります。';
$lang->sftp = 'SFTP使用';
$lang->ftp_get_list = 'ディレクトリを読み込む';
$lang->ftp_remove_info = 'FTP情報削除';
$lang->msg_find_xe_path_fail = 'Rhymixのインストル先が見つかりませんでした。手動で設定してください。';
$lang->msg_ftp_invalid_path = '指定されたFTPパスへのアクセスに失敗しました。';
$lang->use_ftp_passive_mode = 'PASVモードを使用';
$lang->use_sftp_support = 'SFTP使用';
$lang->disable_sftp_support = 'SFTPを使用できる環境ではありません。';
$lang->msg_self_restart_cache_engine = 'Memcachedまたはキャッシュデーモンを再起動してください。';
$lang->autoinstall = '簡単インストール';
$lang->last_week = '先週';
$lang->this_week = '今週';
$lang->trash = 'ゴミ箱';
$lang->accusation = '通報';
$lang->status = '状態';
$lang->action = '実行';
$lang->use_rewrite = 'URLの簡略化機能を使用';
$lang->timezone = '標準時間帯';
$lang->use_mobile_view = 'モバイル版使用';
$lang->about_use_mobile_view = 'モバイル機器で接続した際にモバイルページを見せます。';
$lang->thumbnail_type = 'サムネイルの作成方式を選択してください。';
$lang->input_footer_script = '下段（footer）スクリプト';
$lang->detail_input_footer_script = '最下段にコードを追加します。管理者ページでは遂行できません。';
$lang->thumbnail_crop = 'トリミングする';
$lang->thumbnail_ratio = '比率に合わせる';
$lang->thumbnail_none = 'サムネイルを作成しない';
$lang->admin_ip_allow = '管理者ログイン許容IP';
$lang->admin_ip_deny = '管理者ログイン禁止IP';
$lang->local_ip_address = 'ローカルIPアドレス';
$lang->about_admin_ip_allow = 'ここでIPアドレスの一覧を表示すると、そのIPのみ、管理者のログインが可能になります。すべてのIPからのログインを許可するには、リストを空白のままに。';
$lang->about_admin_ip_deny = 'ここに記載され、IPアドレスは、管理者のログインが禁止されます。';
$lang->msg_current_ip_will_be_denied = '入力された設定によると、現在ログインして、管理者のIPアドレスもブロックされます。再度確認してください。';
$lang->allow_use_favicon = 'ファビコン設定';
$lang->about_use_favicon = '16 x 16 サイズの<em>*.ico</em> ファイルのみ登録できます。';
$lang->allow_use_mobile_icon = '待受画面のアイコン設定';
$lang->detail_use_mobile_icon = '57 x 57 、または114 x 114 サイズの<em>*.png</em> ファイルのみ登録できます。';
$lang->use_sso = '<abbr title="Single Sign On">SSO</abbr>を使用';
$lang->about_use_sso = 'ユーザが一度のログインで基本サイトと仮想サイトに同時にログインされる機能です。 仮想サイトの機能を使用してない場合、設定する必要がありません。';
$lang->about_arrange_session = 'セッションを整理しますか？';
$lang->cmd_clear_session = 'セッション整理';
$lang->save = '保存';
$lang->view = '表示';
$lang->select = '選択';
$lang->move = '移動';
$lang->modify = '修正';
$lang->restore = '復元';
$lang->delete = '削除';
$lang->add = '追加';
$lang->selected_layout = '選択したレイアウト';
$lang->selected_skin = '選択した%sスキン';
$lang->no_selected_skin = '選択した%sスキンなし';
$lang->no_selected_skin_desc = '選択したテーマには、この項目についてのスキン情報がありません。スキンを直接選択してください。';
$lang->no_select = '選択しない';
$lang->admin_logo = '管理者ページロゴ';
$lang->admin_title = '管理者ページタイトル';
$lang->admin_menu_add = '管理者メニュー追加';
$lang->bug_report = 'バグレポート';
$lang->theme_setting = 'テーマ設定';
$lang->skin_setting = 'スキン設定';
$lang->msg_thumbnail_not_exist = 'サムネールが存在しません。';
$lang->user_theme = 'ユーザーテーマ';
$lang->user_define = 'カスタマテーマ';
$lang->by_you = 'ユーザー設定';
$lang->update_available = 'アップデート可能';
$lang->need_update_and_table = 'DBテーブルの作成とモジュールの更新が必要';
$lang->need_update = 'モジュールのアップデートが必要';
$lang->need_table = 'DBテーブルの作成が必要';
$lang->admin_menu_setup = '管理者メニュー設定';
$lang->no_data = '登録されたデータがありません。';
$lang->cmd_admin_menu_reset = '管理者メニューの初期化';
$lang->confirm_reset_admin_menu = '管理者メニューを初期化しますか？';
$lang->cmd_view_server_env = 'サーバー情報出力';
$lang->server_env = 'サーバー情報';
$lang->ftp_form_title = 'FTPアカウント情報の入力';
$lang->ftp = 'FTP';
$lang->ftp_host = 'FTPサーバーアドレス';
$lang->ftp_port = 'FTPポート番号（port）';
$lang->about_ftp_password = 'パースワードはFTPパス確認のために使い、使用後には保存しません。';
$lang->cmd_check_ftp_connect = 'FTP接続を確認する';
$lang->msg_ftp_no_directory = 'FTPに接続しましたが、ディレクトリの情報を読み取ることができません。サーバー設定を確認してください。';
$lang->msg_ftp_mkdir_fail = 'FTPでのディレクトリ作成に失敗しました。FTPサーバーの設定を再度確認してください。';
$lang->msg_ftp_chmod_fail = 'FTPでのディレクトリのアクセス権変更に失敗しました。FTPサーバーの設定を再度確認してください。';
$lang->msg_ftp_connect_success = 'FTP接続、および認証に成功しました。';
$lang->ftp_path_title = 'FTPパス情報入力';
$lang->ftp_installed_realpath = 'インストールされたRhymixの絶対パス';
$lang->msg_ftp_installed_ftp_realpath = 'インストールされたRhymixのFTP絶対パス設定';
$lang->admin_setup = '管理者設定';
$lang->open_all = 'すべて開く';
$lang->close_all = 'すべて閉じる';
$lang->desktop_settings = 'PC設定';
$lang->mobile_settings = 'モバイル設定';
$lang->details = '詳細';
$lang->available_new_version = '新しいバージョンを使用できます。';
$lang->uv = '純訪問者';
$lang->pv = 'ベージビュー';
$lang->next_week = '来週';
$lang->mon = '月';
$lang->tue = '火';
$lang->wed = '水';
$lang->thu = '木';
$lang->fri = '金';
$lang->sat = '土';
$lang->sun = '日';
$lang->checkBrowserIE8 = 'IE8以下のブラウザは管理者ベージが正常に動作できない場合があります。';
$lang->subtitle_sitelock = 'サイトロック';
$lang->use_sitelock = 'サイトロック使用';
$lang->sitelock_whitelist = '接近許可IP';
$lang->sitelock_title = '案内文タイトル';
$lang->sitelock_message = '案内文内容';
$lang->sitelock_message_help = 'HTMLタグを使用できます。';
$lang->your_ip = '接続したIP';
$lang->sitelock_in_use = 'サイトロック状態です。';
$lang->about_sitelock_in_use = '管理者との接続が許可されたIPのみのサイトの利用が可能です。';
