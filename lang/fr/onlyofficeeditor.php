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
 * Strings for component 'onlyofficeeditor', language 'fr'.
 *
 * @package     mod_onlyofficeeditor
 * @subpackage
 * @copyright   2023 Ascensio System SIA <integration@onlyoffice.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['editorenterfullscreen'] = 'Ouvrir en mode plein écran';
$string['editorexitfullscreen'] = 'Quitter le mode plein écran';
$string['onmentionerror'] = 'Erreur de mention.';
$string['mentioncontexturlname'] = 'Lien vers le commentaire.';
$string['messageprovider:mentionnotifier'] = 'Notification de mention ONLYOFFICE dans le module Documents.';
$string['mentionnotifier:notification'] = '{$a->notifiant} mentionné dans le {$a->cours}';
$string['docxformname'] = 'Document';
$string['pptxformname'] = 'Presentation';
$string['xlsxformname'] = 'Classeur';
$string['docxfformname'] = 'Modèle de formulaire';
$string['uploadformname'] = 'Charger fichier';
$string['modulename'] = 'Document ONLYOFFICE';
$string['modulenameplural'] = 'Documents ONLYOFFICE';
$string['modulename_help'] = 'Le module ONLYOFFICE permet aux utilisateurs de créer et de modifier des documents bureautiques stockés localement dans Moodle à l\'aide de ONLYOFFICE Document Server. Il permet à plusieurs utilisateurs de collaborer en temps réel et d\'enregistrer ces modifications dans Moodle';
$string['pluginname'] = 'Document ONLYOFFICE';
$string['pluginadministration'] = 'Administration de l\'activité documentaire ONLYOFFICE';
$string['onlyofficename'] = 'Nom de l\'activité';

$string['onlyofficeactivityicon'] = 'Ouvrir dans ONLYOFFICE';
$string['onlyofficeeditor:addinstance'] = 'Ajouter une nouvelle activité documentaire ONLYOFFICE';
$string['onlyofficeeditor:view'] = 'Afficher l\'activité du document ONLYOFFICE';
$string['onlyofficeeditor:editdocument'] = 'Modifier l\'activité du document ONLYOFFICE';

$string['documentserverurl'] = 'Adresse du service d\'édition de documents';
$string['documentserverurl_desc'] = 'L\'adresse du service d\'édition de documents spécifie l\'adresse du serveur sur lequel sont installés les services de documents. Veuillez remplacer \'https://documentserver.url\' ci-dessus par l\'adresse correcte du serveur.';
$string['documentserversecret'] = 'Secret de Document Server';
$string['documentserversecret_desc'] = 'Le secret est utilisé pour générer le jeton (une signature cryptée) dans le navigateur pour l\'ouverture de l\'éditeur de documents et l\'appel des méthodes et des demandes au service de commande de documents et au service de conversion de documents. Le jeton empêche la substitution de paramètres importants dans les requêtes du Document Server de ONLYOFFICE.';
$string['jwtheader'] = 'En-tête d\'autorisation';

$string['selectfile'] = 'Sélectionnez un fichier existant ou créez-en un nouveau en cliquant sur l\'une des icônes';
$string['documentpermissions'] = 'Autorisations du document';
$string['download'] = 'Document peut être téléchargé';
$string['download_help'] = 'Si cette option est désactivée, les documents ne seront pas téléchargeables dans l\'application de l\'éditeur ONLYOFFICE. Veuillez noter que les utilisateurs ayant la capacité <strong>course:manageactivities</strong> sont toujours en mesure de télécharger des documents via l\'application.';
$string['print'] = 'Document peur être imprimé';
$string['print_help'] = 'Si cette option est désactivée, les documents ne seront pas imprimables via l\'application de l\'éditeur ONLYOFFICE. Veuillez noter que les utilisateurs ayant la capacité <strong>course:manageactivities</strong> sont toujours en mesure d\'imprimer des documents via l\'application.';
$string['protect'] = 'Masquer l\'onglet Protection';
$string['protect_help'] = 'Si cette option est désactivée, les utilisateurs ont accès aux paramètres de protection dans l\'éditeur ONLYOFFICE. Veuillez noter que les utilisateurs ayant la capacité <strong>course:manageactivities</strong> ont toujours accès aux paramètres de protection.';

$string['returntodocument'] = 'Retour à la page de cours';
$string['docserverunreachable'] = 'Document Server de ONLYOFFICE n\'est pas accessible. Veuillez contacter l\'administrateur';
$string['privacy:metadata'] = 'Aucune information sur les données personnelles des utilisateurs n\'est stockée.';
$string['privacy:metadata:onlyofficeeditor:userid'] = 'L\'ID de l\'utilisateur actuel n\'est pas envoyé à l\'éditeur ONLYOFFICE.';
$string['privacy:metadata:onlyofficeeditor:intro'] = 'Introduction générale de l\'activité ONLYOFFICE';
$string['privacy:metadata:onlyofficeeditor:introformat'] = 'Format du champs d\'introduction (MOODLE, HTML, MARKDOWN...).';
$string['privacy:metadata:onlyofficeeditor:permissions'] = 'Autorisations de document.';
$string['privacy:metadata:onlyofficeeditor:name'] = 'Nom de l\'activité ONLYOFFICE.';
$string['privacy:metadata:onlyofficeeditor:course'] = 'Cours auquel appartient l\'activité ONLYOFFICE.';
$string['privacy:metadata:onlyofficeeditor'] = 'Information sur les documents édités avec ONLYOFFICE.';
$string['privacy:metadata:onlyofficeeditor:core_files'] = 'L\'activité documentaire ONLYOFFICE stocke les documents qui ont été édités.';
$string['forcesave'] = 'Activer Sauvegarde Force';
$string['editor_view'] = 'Paramètres de personnalisation de l\'éditeur';
$string['editor_view_chat'] = 'Afficher le bouton du menu du Chat';
$string['editor_view_help'] = 'Afficher le bouton du menu Aide';
$string['editor_view_header'] = 'Afficher l\'en-tête plus compact';
$string['editor_view_feedback'] = 'Afficher le bouton du menu Feedback & Support';
$string['editor_view_toolbar'] = 'Afficher un en-tête monochrome de la barre d\'outils';

$string['oldversion'] = 'Veuillez mettre à jour ONLYOFFICE Docs vers la version 7.0 pour travailler sur les formulaires à remplir en ligne.';
$string['saveaserror'] = 'Un problème est survenu.';
$string['saveassuccess'] = 'Le document a été enregistré avec succès.';
$string['saveastitle'] = 'Choisissez la section du cours pour enregistrer le document';
$string['saveasbutton'] = 'Sélectionner';
