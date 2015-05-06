<?php

return [
    'plugin' => [
        'name' => 'Пользователи',
        'description' => 'Фронтенд управление пользователями.'
    ],
    'location' => [
        'location' => 'локацию',
        'new' => 'Новая локация',
        'create_title' => 'Создать локацию',
        'update_title' => 'Изменить локацию',
        'preview_title' => 'Просмотр локации',
    ],
    'locations' => [
        'menu_label' => 'Локации',
        'menu_description' => 'Управление доступными локациями (страны, города, штаты).',
        'hide_disabled' => 'Скрыть отключенные',
        'enabled_label' => "Разрешить локации для выбора",
        'enabled_help' => "Переключение доступности выбора локаций в настройках пользователя.",
        'enable_or_disable_title' => "Включение и отключение локаций",
        'enable_or_disable' => 'Включить или отключить',
        'selected_amount' => 'Выбрано локаций: :amount',
        'enable_success' => "Выбранные локации теперь доступны для выбора.",
        'disable_success' => "Выбранные локации теперь не доступны для выбора.",
        'disable_confirm' => 'Вы уверены?',
        'list_title' => 'Управление локациями',
        'delete_confirm' => 'Вы действительно хотите удалить эту локацию?',
        'return_to_list' => 'Вернуться к списку локаций',
    ],
    'users' => [
        'menu_label' => 'Пользователи',
        'all_users' => 'Все пользователи',
        'new_user' => 'Новый пользователь',
        'list_title' => 'Управление пользователями',
        'activating' => 'Активация...',
        'activate_warning_title' => 'Пользователь не активирован!',
        'activate_warning_desc' => 'Этот пользователь не активирован и не сможет войти.',
        'activate_confirm' => 'Вы действительно хотите активировать данного пользователя?',
        'active_manually' => 'Активировать этого пользователя вручную',
        'delete_confirm' => 'Вы действительно хотите удалить этого пользователя?',
        'activated_success' => 'Пользователь был успешно активирован!',
        'return_to_list' => 'Вернуться к списку пользователей',
    ],
    'settings' => [
        'menu_label' => 'Настройки пользователя',
        'menu_description' => 'Управления параметрами пользователя.',
        'activation_tab' => 'Активация',
        'location_tab' => 'Локация',
        'signin_tab' => 'Авторизация',
        'activate_mode' => 'Активация',
        'activate_mode_comment' => 'Активация пользователя.',
        'activate_mode_auto' => 'Автоматическая',
        'activate_mode_auto_comment' => 'Автоматическая активация при регистрации.',
        'activate_mode_user' => 'Стандартная',
        'activate_mode_user_comment' => 'Активация при помощи электронной почты.',
        'activate_mode_admin' => 'Ручная',
        'activate_mode_admin_comment' => 'Только администратор может активировать пользователя.',
        'welcome_template' => 'Шаблон приветствия',
        'welcome_template_comment' => 'Шаблон сообщения, отправляемого после активации.',
        'require_activation' => 'Обязательная активация аккаунта',
        'require_activation_comment' => 'Пользователи должны иметь активированный аккаунт для входа.',
        'default_country' => 'Страна по умолчанию',
        'default_country_comment' => 'Если пользователь не определяет своё местоположение, будет установлена страна по умолчанию.',
        'default_state' => 'Штат по умолчанию',
        'default_state_comment' => 'Если пользователь не определяет своё местоположение, будет установлен штат по умолчанию.',
        'use_throttle' => 'Отслеживание неудачных попыток авторизации',
        'use_throttle_comment' => 'При множественных неудачных попытках авторизации пользователь будет заморожен.',
        'login_attribute' => 'Логин',
        'login_attribute_comment' => 'Поле, используемое в качестве логина пользователя.',
        'no_mail_template' => 'Не отправлять уведомление',
        'hint_templates' => 'Вы можете настроить шаблоны почты, выбрав "Почта" -> "Шаблоны почты" в меню настроек.',
    ],
    'state' => [
        'label' => 'Штат',
        'name' => 'Название',
        'name_comment' => 'Введите отображаемое имя для данного государства.',
        'code' => 'Код',
        'code_comment' => 'Введите уникальный код для идентификации этой страны.',
    ],
    'country' => [
        'name' => 'Название',
        'code' => 'Код',
        'code_comment' => 'Введите уникальный код для идентификации этой страны.',
        'enabled' => 'Доступно для выбора',
    ],
    'user' => [
        'user' => 'пользователя',
        'id' => 'ID',
        'username' => 'Имя пользователя',
        'name' => 'Имя',
        'email' => 'Почта',
        'created_at' => 'Дата регистрации',
        'phone' => 'Телефон',
        'company' => 'Компания',
        'city' => 'Город',
        'zip' => 'Почтовый индекс',
        'street_addr' => 'Адрес',
        'country' => 'Страна',
        'state' => 'Штат',
        'reset_password' => 'Сброс пароля',
        'reset_password_comment' => 'Для сброса пользовательского пароля, введите здесь новый пароль.',
        'confirm_password' => 'Подтверждение пароля',
        'confirm_password_comment' => 'Введите пароль еще раз для подтверждения.',
        'avatar' => 'Аватар',
        'details' => 'Информация',
        'account' => 'Аккаунт',
    ],
    'login' => [
        'attribute_email' => 'Почта',
        'attribute_username' => 'Имя пользователя',
    ],
    'account' => [
        'account' => 'Аккаунт',
        'account_desc' => 'Управление формой.',
        'redirect_to' => 'Перенаправление',
        'redirect_to_desc' => 'Страница для перенаправления после обновления, входа или регистрации.',
        'code_param' => 'Параметр кода',
        'code_param_desc' => 'Параметр, в котором передаётся код активации.',
        'invalid_activation_code' => 'Неверный код активации.',
        'invalid_user' => 'Пользователь с такими данным не найден.',
        'success_activation' => 'Успешная активация пользователя.',
        'success_saved' => 'Настройки успешно сохранены!',
        'login_first' => 'Вам необходимо войти под своими данными!',
        'alredy_active' => 'Ваш аккаунт ещё активирован!',
        'activation_email_sent' => 'Письмо с дальнейшими инструкциями по активации было выслано на указанный адрес электронной почты.',
        'country' => 'Страна',
        'state' => 'Штат',
        'sign_in' => 'Авторизация',
        'register' => 'Регистрация',
        'full_name' => 'Полное имя',
        'email' => 'Почта',
        'password' => 'Пароль',
        'register' => 'Регистрация',
        'login' => 'Логин',
        'address' => 'Адрес',
        'city_suburb' => 'Город / Пригород',
        'postal_code' => 'Почтовый индекс',
        'new_password' => 'Новый пароль',
        'new_password_confirm' => 'Подтверждение пароля',
    ],
    'reset_password' => [
        'reset_password' => 'Сброс пароля',
        'reset_password_desc' => 'Форма восстановления пароля.',
        'code_param' => 'Параметр кода',
        'code_param_desc' => 'Параметр, в котором передаётся код сброса пароля.',
    ],
    'session' => [
        'session' => 'Сессия',
        'session_desc' => 'Добавление пользовательского сеанса к странице (доступ)',
        'security_title' => 'Доступ к странице',
        'security_desc' => 'Кто имеет право на доступ к этой странице.',
        'all' => 'Все',
        'users' => 'Пользователи',
        'guests' => 'Гости',
        'redirect_title' => 'Перенаправление',
        'redirect_desc' => 'Страница для перенаправления при отстутсвии доступа.',
        'logout' => 'You have been successfully logged out!'
    ],
];
