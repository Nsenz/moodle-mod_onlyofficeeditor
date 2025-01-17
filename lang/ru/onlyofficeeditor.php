<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'onlyofficeeditor', language 'ru'.
 *
 * @package     mod_onlyofficeeditor
 * @subpackage
 * @copyright   2023 Ascensio System SIA <integration@onlyoffice.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['editorenterfullscreen'] = 'Открыть в полноэкранном режиме';
$string['editorexitfullscreen'] = 'Выйти из полноэкранного режима';
$string['onmentionerror'] = 'Ошибка при упоминании.';
$string['mentioncontexturlname'] = 'Ссылка на комментарий.';
$string['messageprovider:mentionnotifier'] = 'Уведомление с упоминанием ONLYOFFICE в модуле Документы.';
$string['mentionnotifier:notification'] = '{$a->notifier} упоминается в {$a->course}';
$string['docxformname'] = 'Документ';
$string['pptxformname'] = 'Презентация';
$string['xlsxformname'] = 'Таблица';
$string['docxfformname'] = 'Шаблон формы';
$string['uploadformname'] = 'Загрузить файл';
$string['modulename'] = 'Документ ONLYOFFICE';
$string['modulenameplural'] = 'Документы ONLYOFFICE';
$string['modulename_help'] = 'Модуль ONLYOFFICE позволяет пользователям создавать и редактировать офисные документы, которые хранятся локально в Moodle с помощью Сервера документов ONLYOFFICE, а также предоставляет возможность нескольким пользователям работать совместно в режиме реального времени и сохранять изменения в Moodle';
$string['pluginname'] = 'Документ ONLYOFFICE';
$string['pluginadministration'] = 'Управление элементом Документ ONLYOFFICE';
$string['onlyofficename'] = 'Наименование элемента';

$string['onlyofficeactivityicon'] = 'Открыть в ONLYOFFICE';
$string['onlyofficeeditor:addinstance'] = 'Добавить новый элемент Документ ONLYOFFICE';
$string['onlyofficeeditor:view'] = 'Просмотр элемента Документ ONLYOFFICE';
$string['onlyofficeeditor:editdocument'] = 'Редактирование элемента Документ ONLYOFFICE';

$string['documentserverurl'] = 'Адрес службы редактирования документов';
$string['documentserverurl_desc'] = 'Адрес службы редактирования документов определяет адрес сервера с установленными сервисами документов. Пожалуйста, измените \'https://documentserver.url\' выше на верный адрес сервера';
$string['documentserversecret'] = 'Секретный ключ Сервера документов';
$string['documentserversecret_desc'] = 'Секретный ключ используется для генерирования токена (шифрованной подписи) в браузере, чтобы открыть редактор документов и вызвать методы и запросы к сервису управления документами и сервису преобразования документов. Токен предотвращает замену важных параметров в запросах от Сервера документов ONLYOFFICE.';
$string['jwtheader'] = 'Заголовок авторизации';

$string['selectfile'] = 'Выберите существующий файл или создайте новый нажатием на одну из иконок';
$string['documentpermissions'] = 'Разрешения на действия с документом';
$string['download'] = 'Документ может быть скачан';
$string['download_help'] = 'Если данная функция отключена, документы не будут скачиваться в приложении ONLYOFFICE editor. Пожалуйста, обратите внимание, что пользователи с уровнем доступа <strong>course:manageactivities</strong> при этом могут скачивать документы с помощью приложения';
$string['print'] = 'Документ может быть напечатан';
$string['print_help'] = 'Если данная функция отключена, документы не будут напечатаны с помощью приложения ONLYOFFICE editor. Пожалуйста, обратите внимание, что пользователи с уровнем доступа <strong>course:manageactivities</strong> при этом могут печатать документы с помощью приложения';
$string['protect'] = 'Скрыть вкладку Защита';
$string['protect_help'] = 'Если данная функция отключена, пользователям предоставляется доступ к настройкам защиты в ONLYOFFICE editor. Пожалуйста, обратите внимание, что пользователям с уровнем доступа <strong>course:manageactivities</strong> при этом предоставлен доступ к настройкам защиты.';

$string['returntodocument'] = 'Вернуться к странице курса';
$string['docserverunreachable'] = 'Сервер документов ONLYOFFICE недоступен. Пожалуйста, свяжитесь с администратором';
$string['privacy:metadata'] = 'Информация о персональных данных пользователей не сохраняется.';
$string['privacy:metadata:onlyofficeeditor:userid'] = 'Текущий ID пользователя не отправлен в ONLYOFFICE editor.';
$string['privacy:metadata:onlyofficeeditor:intro'] = 'Общее представление элементов ONLYOFFICE';
$string['privacy:metadata:onlyofficeeditor:introformat'] = 'Формат поля ввода (MOODLE, HTML, MARKDOWN...).';
$string['privacy:metadata:onlyofficeeditor:permissions'] = 'Разрешения на действия с документом.';
$string['privacy:metadata:onlyofficeeditor:name'] = 'Наименование элемента ONLYOFFICE.';
$string['privacy:metadata:onlyofficeeditor:course'] = 'Курс, к которому относятся элементы ONLYOFFICE';
$string['privacy:metadata:onlyofficeeditor'] = 'Сведения о документах, отредактированных с помощью ONLYOFFICE.';
$string['privacy:metadata:onlyofficeeditor:core_files'] = 'Элемент Документ ONLYOFFICE сохраняет отредактированные документы.';
$string['forcesave'] = 'Включить Force Save';
$string['editor_view'] = 'Настройка редактора';
$string['editor_view_chat'] = 'Отображать кнопку чата';
$string['editor_view_help'] = 'Отображать кнопку справки';
$string['editor_view_header'] = 'Отображать заголовок компактным';
$string['editor_view_feedback'] = 'Отображать кнопку Обратной связи и поддержки';
$string['editor_view_toolbar'] = 'Отображать монохромный заголовок панели инструментов';

$string['oldversion'] = 'Обновите сервер ONLYOFFICE Docs до версии 7.0 для работы с формами онлайн';
$string['saveaserror'] = 'Что-то пошло не так.';
$string['saveassuccess'] = 'Документ был успешно сохранен.';
$string['saveastitle'] = 'Выберите раздел Курсы, чтобы сохранить документ';
$string['saveasbutton'] = 'Выбрать';
