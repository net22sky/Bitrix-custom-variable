<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

    /**
     * @var string $componentPath
     * @var string $componentName
     * @var array $arCurrentValues
     * */

    use Bitrix\Main\Loader;
    use Bitrix\Main\Localization\Loc;

    if (!Loader::includeModule("iblock")) {
        throw new \Exception('Не загружены модули необходимые для работы компонента');
    }

    $arrSet = [
        'var_1' => 'переменная 1',
        'var_2' => 'переменная 2',
        'var_3' => 'переменная 3',
    ];

    $arrTemplateParameters = [];

    foreach ($arrSet as $key => $value) {
        $arrTemplateParameters[$key] = [
            "SETTINGS_VAl" => [
                'NAME' => $value,
                'COLS' => 35,
                'ROWS' => 3,
            ],
        ];
    }


    $arComponentParameters = [
        // группы в левой части окна
        "GROUPS" => [
            "SETTINGS" => [
                "NAME" => Loc::getMessage('EXAMPLE_COMPSIMPLE_PROP_SETTINGS'),
                "TYPE" => "STRING",
                "SORT" => 550,
            ],

        ],
        // поля для ввода параметров в правой части
        "PARAMETERS" => [
            // Произвольный параметр типа СПИСОК

            // Произвольный параметр типа СТРОКА
            "SETTINGS_VAl_1" => [
                "PARENT" => "SETTINGS",
                "NAME" => Loc::getMessage('PROP_SETTINGS_VAl_1'),
                "TYPE" => "STRING",
                "MULTIPLE" => "N",
                "DEFAULT" => "",
                "COLS" => 25,
            ],
            "SETTINGS_VAl_2" => [
                "PARENT" => "SETTINGS",
                "NAME" => Loc::getMessage('PROP_SETTINGS_VAl_2'),
                "TYPE" => "STRING",
                "MULTIPLE" => "N",
                "DEFAULT" => "",
                "COLS" => 25,
            ],
            "SETTINGS_VAl_3" => [
                "PARENT" => "SETTINGS",
                "NAME" => Loc::getMessage('PROP_SETTINGS_VAl_3'),
                "TYPE" => "STRING",
                "MULTIPLE" => "N",
                "DEFAULT" => "",
                "COLS" => 25,
            ],
            "SETTINGS_VAl_4" => [
                "PARENT" => "SETTINGS",
                "NAME" =>Loc::getMessage('PROP_SETTINGS_VAl_4'),
                "TYPE" => "STRING",
                "MULTIPLE" => "N",
                "DEFAULT" => "",
                "COLS" => 25,
            ],

            // Настройки кэширования
            'CACHE_TIME' => ['DEFAULT' => 3600],
        ],
    ];