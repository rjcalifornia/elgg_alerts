<?php
/**
 * Elgg global system message list
 * Lists all system messages
 *
 * @uses $vars['object'] The array of message registers
 */


$twig = elgg_alerts_twig();
$messages = (array) elgg_extract('object', $vars, []);
$site_url = elgg_get_site_url();
// hidden li so we validate, we need this for javascript added system messages
$list_items = elgg_format_element('li', ['class' => 'hidden']);
$data['messages'] = $messages;
$data['site_url'] = $site_url;

if(!empty($messages)){
    $messages = null;
echo $twig->render('elements/notifications.html.twig', 
        [
            'data' => $data,
        ]);
    }

    