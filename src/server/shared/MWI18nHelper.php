<?php
// GENERATED [2024-08-01 21:31:57]
namespace MW\Shared;

class MWI18nHelper
{
    const PAGE_TITLE_GUEST_INDEX = 'PAGE_TITLE_GUEST_INDEX';
    const PAGE_TITLE_RECOVERY_PASSWORD = 'PAGE_TITLE_RECOVERY_PASSWORD';
    const PAGE_TITLE_MESSAGE = 'PAGE_TITLE_MESSAGE';
    const PAGE_TITLE_ADMIN_INDEX = 'PAGE_TITLE_ADMIN_INDEX';
    const PAGE_TITLE_PARALLEL = 'PAGE_TITLE_PARALLEL';
    const PAGE_TITLE_PARALLEL_LIST = 'PAGE_TITLE_PARALLEL_LIST';
    const PAGE_TITLE_GROUP = 'PAGE_TITLE_GROUP';
    const PAGE_TITLE_GROUP_LIST = 'PAGE_TITLE_GROUP_LIST';
    const PAGE_TITLE_TEACHER = 'PAGE_TITLE_TEACHER';
    const PAGE_TITLE_TEACHER_LIST = 'PAGE_TITLE_TEACHER_LIST';
    const PAGE_TITLE_TEACHER_INDEX = 'PAGE_TITLE_TEACHER_INDEX';

    const MSG_FIELD_EMAIL_INCORRECT = 'MSG_FIELD_EMAIL_INCORRECT';
    const MSG_FIELD_IS_TOO_LONG = 'MSG_FIELD_IS_TOO_LONG';
    const MSG_FIELD_IS_TOO_SHORT = 'MSG_FIELD_IS_TOO_SHORT';
    const MSG_FIELD_IS_REQUIRED = 'MSG_FIELD_IS_REQUIRED';
    const MSG_WRONG_EMAIL_OR_PASSWORD = 'MSG_WRONG_EMAIL_OR_PASSWORD';

    const ERR_UNKNOWN = 'ERR_UNKNOWN';
    const ERR_AUTHORIZATION_NEEDED = 'ERR_AUTHORIZATION_NEEDED';
    const ERR_DB_CONNECTION_FAILED = 'ERR_DB_CONNECTION_FAILED';
    const ERR_DB_SQL_STATEMENT_FAILED = 'ERR_DB_SQL_STATEMENT_FAILED';
    const ERR_WRONG_REQUEST_PARAMETERS = 'ERR_WRONG_REQUEST_PARAMETERS';

    private static ?MWI18nHelper $_Instance = null;
    private array $_pageTemplateList = [];
    private array $_msgList = [];
    private array $_errorMsgList = [];
    private array $_errorLogMsgList = [];
    private array $_errorHttpStatusList = [];

    public static function Instance(): MWI18nHelper
    {
        if (is_null(self::$_Instance)) {
            self::$_Instance = new MWI18nHelper();
        }
        return self::$_Instance;
    }

    public function page($pageName, $langId): callable
    {
        return $this->_pageTemplateList[$pageName][$langId];
    }

    public function message($errCode): callable
    {
        return $this->_msgList[$errCode];
    }

    public function errorMessageNOTUSED($errCode, $langId): callable
    {
        return $this->_errorMsgList[$errCode][$langId];
    }

    public function errorLogMessage($errCode): callable
    {
        return $this->_errorLogMsgList[$errCode];
    }

    public function httpStatus($errCode): int
    {
        return $this->_errorHttpStatusList[$errCode];
    }

    private function __construct()
    {
        $this->_pageTemplateList = [
            self::PAGE_TITLE_GUEST_INDEX => [
                'ru' =>
                    function (...$args) {
                        return sprintf('Вход', ...$args);
                    },
                'en' =>
                    function (...$args) {
                        return sprintf('Sign In', ...$args);
                    },
                ],
            self::PAGE_TITLE_RECOVERY_PASSWORD => [
                'ru' =>
                    function (...$args) {
                        return sprintf('Восстановление пароля', ...$args);
                    },
                'en' =>
                    function (...$args) {
                        return sprintf('Recovery Password', ...$args);
                    },
                ],
            self::PAGE_TITLE_MESSAGE => [
                'ru' =>
                    function (...$args) {
                        return sprintf('Сообщение', ...$args);
                    },
                'en' =>
                    function (...$args) {
                        return sprintf('Message', ...$args);
                    },
                ],
            self::PAGE_TITLE_ADMIN_INDEX => [
                'ru' =>
                    function (...$args) {
                        return sprintf('Меню', ...$args);
                    },
                'en' =>
                    function (...$args) {
                        return sprintf('Menu', ...$args);
                    },
                ],
            self::PAGE_TITLE_PARALLEL => [
                'ru' =>
                    function (...$args) {
                        return sprintf('Параллель', ...$args);
                    },
                'en' =>
                    function (...$args) {
                        return sprintf('Parallel', ...$args);
                    },
                ],
            self::PAGE_TITLE_PARALLEL_LIST => [
                'ru' =>
                    function (...$args) {
                        return sprintf('Список параллелей', ...$args);
                    },
                'en' =>
                    function (...$args) {
                        return sprintf('Parallel List', ...$args);
                    },
                ],
            self::PAGE_TITLE_GROUP => [
                'ru' =>
                    function (...$args) {
                        return sprintf('Группа', ...$args);
                    },
                'en' =>
                    function (...$args) {
                        return sprintf('Group', ...$args);
                    },
                ],
            self::PAGE_TITLE_GROUP_LIST => [
                'ru' =>
                    function (...$args) {
                        return sprintf('Список групп', ...$args);
                    },
                'en' =>
                    function (...$args) {
                        return sprintf('Group List', ...$args);
                    },
                ],
            self::PAGE_TITLE_TEACHER => [
                'ru' =>
                    function (...$args) {
                        return sprintf('Преподаватель', ...$args);
                    },
                'en' =>
                    function (...$args) {
                        return sprintf('Teacher', ...$args);
                    },
                ],
            self::PAGE_TITLE_TEACHER_LIST => [
                'ru' =>
                    function (...$args) {
                        return sprintf('Список преподавателей', ...$args);
                    },
                'en' =>
                    function (...$args) {
                        return sprintf('Teacher List', ...$args);
                    },
                ],
            self::PAGE_TITLE_TEACHER_INDEX => [
                'ru' =>
                    function (...$args) {
                        return sprintf('Меню', ...$args);
                    },
                'en' =>
                    function (...$args) {
                        return sprintf('Menu', ...$args);
                    },
                ],
        ];
        $this->_msgList = [
            self::MSG_FIELD_EMAIL_INCORRECT => function (...$args) {
                return sprintf('Некорректный адрес электронной почты: %s', ...$args);
            },
            self::MSG_FIELD_IS_TOO_LONG => function (...$args) {
                return sprintf('Поле содержит слишком длинное значение: %d больше чем %d', ...$args);
            },
            self::MSG_FIELD_IS_TOO_SHORT => function (...$args) {
                return sprintf('Поле содержит слишком короткое значение: %d меньше чем %d', ...$args);
            },
            self::MSG_FIELD_IS_REQUIRED => function (...$args) {
                return sprintf('Поле должно быть заполнено: %s', ...$args);
            },
            self::MSG_WRONG_EMAIL_OR_PASSWORD => function (...$args) {
                return sprintf('Попытка входа в систему. Не верный %s', ...$args);
            },
        ];

        $this->_errorMsgList = [
            self::ERR_UNKNOWN => [
                'ru' =>
                    function (...$args) {
                        return sprintf('Неизвестная ошибка', ...$args);
                    },
                'en' =>
                    function (...$args) {
                        return sprintf('Unknown error', ...$args);
                    },
                ],
            self::ERR_AUTHORIZATION_NEEDED => [
                'ru' =>
                    function (...$args) {
                        return sprintf('Нет прав для выполнения данной операции', ...$args);
                    },
                'en' =>
                    function (...$args) {
                        return sprintf('Access forbidden', ...$args);
                    },
                ],
            self::ERR_DB_CONNECTION_FAILED => [
                'ru' =>
                    function (...$args) {
                        return sprintf('Нет доступа к базе данных', ...$args);
                    },
                'en' =>
                    function (...$args) {
                        return sprintf('Database connection failed', ...$args);
                    },
                ],
            self::ERR_DB_SQL_STATEMENT_FAILED => [
                'ru' =>
                    function (...$args) {
                        return sprintf('Ошибка при выполнении запроса к базе данных', ...$args);
                    },
                'en' =>
                    function (...$args) {
                        return sprintf('SQL statement error', ...$args);
                    },
                ],
            self::ERR_WRONG_REQUEST_PARAMETERS => [
                'ru' =>
                    function (...$args) {
                        return sprintf('Неверные параметры запроса', ...$args);
                    },
                'en' =>
                    function (...$args) {
                        return sprintf('Wrong request parameters', ...$args);
                    },
                ],
        ];        
        $this->_errorLogMsgList = [
            self::ERR_UNKNOWN => function (...$args) {
                return sprintf('Неизвестная ошибка: %s', ...$args);
            },
            self::ERR_AUTHORIZATION_NEEDED => function (...$args) {
                return sprintf('Нет прав для выполнения данной операции
RoleId:%d
Resource:%s
ActionId:%d
', ...$args);
            },
            self::ERR_DB_CONNECTION_FAILED => function (...$args) {
                return sprintf('Нет доступа к базе данных', ...$args);
            },
            self::ERR_DB_SQL_STATEMENT_FAILED => function (...$args) {
                return sprintf('Ошибка при выполнении запроса к базе данных
Exception: %s
SQL: %s
vars: %s
constVars: %s
', ...$args);
            },
            self::ERR_WRONG_REQUEST_PARAMETERS => function (...$args) {
                return sprintf('Неправильные типы данных в запросе: %s\n%s', ...$args);
            },
        ];
        $this->_errorHttpStatusList = [
            self::ERR_UNKNOWN => 500,
            self::ERR_AUTHORIZATION_NEEDED => 403,
            self::ERR_DB_CONNECTION_FAILED => 500,
            self::ERR_DB_SQL_STATEMENT_FAILED => 500,
            self::ERR_WRONG_REQUEST_PARAMETERS => 400,
        ];
    }
}