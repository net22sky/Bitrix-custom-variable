<?php
   namespace net22sky;

    use Bitrix\Main\Application;
    use Bitrix\Main\Data\Cache;
    use Bitrix\Main\Loader;

    if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

    class CustomVariable extends \CBitrixComponent

{
        /**
         * Проверка наличия модулей требуемых для работы компонента
         * @return bool
         * @throws Exception
         */
        private function _checkModules()
        {
            if (!Loader::includeModule('iblock')
            ) {
                throw new \Exception('Не загружены модули необходимые для работы модуля');
            }

            return true;
        }

        /**
         * Обертка над глобальной переменной
         * @return CAllMain|CMain
         */
        private function _app()
        {
            global $APPLICATION;
            return $APPLICATION;
        }

        /**
         * Обертка над глобальной переменной
         * @return CAllUser|CUser
         */
        private function _user()
        {
            global $USER;
            return $USER;
        }

        /**
         * Подготовка параметров компонента
         *
         * @param $arParams
         *
         * @return mixed
         * 
         * TODO: 
         * 
         */
        public function onPrepareComponentParams($arParams)
        {
            // тут пишем логику обработки параметров, дополнение параметрами по умолчанию
            // и прочие нужные вещи
            return $arParams;
        }

        public function executeComponent()
        {

            $this->_checkModules();

            // что-то делаем и результаты работы помещаем в arResult, для передачи в шаблон
            $this->arResult['SOME_VAR'] = $this->arParams;//'some result data for template';

            $this->includeComponentTemplate();
        }



    }