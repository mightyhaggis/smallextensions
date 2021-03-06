<?php

return [
    'plugin' => [
        'name' => 'Drobná rozšíření',
        'description' => 'Rozšíření pro pluginy Rainlab Blog a Pages',
        'category' => 'Small plugins',
    ],
    'labels' => [
        'wysiwyg_section' => 'WYSIWYG editor',
        'enable_wysiwyg' => 'Povolit WYSIWYG editor pro plugin Rainlab.Blog?',
        'enable_wysiwyg_description' => 'Nahradí výchozí Markdown editor za Richtext editor.',
        'enable_wysiwyg_toolbar' => 'Vlastní tlačítka nástrojové lišty editoru (nechte prázdné pro výchozí sadu)',
        'enable_wysiwyg_toolbar_description' => '<p><small>Zde můžete změnit tlačítka zobrazená v liště editoru. <a href="https://octobercms.com/docs/backend/forms#widget-richeditor" target="_blank">Podívejte se, která tlačítka jsou dostupná.</a></small> <small>Nebo můžete zkusit <a href="https://www.froala.com/wysiwyg-editor/examples/custom-buttons" target="_blank">vytvořit svá vlastní tlačítka.</a></small></p>',
        'enable_featured_image' => 'Obrázek příspěvku ze Správce médií',
        'enable_featured_image_description' => 'Nahradí původní pole pro upload obrázků polem pro výběr obrázku ze správce médií. Twig: {{post.custom_fields.featured_image|media}}.',
        'enable_featured_image_meta' => 'Umožnit přidat k obrázku název a popisek',
        'enable_featured_image_meta_description' => 'Twig: Title:{{post.custom_fields.featured_image_title|media}}, Description: {{post.custom_fields.featured_image_alt|media}}.',
        'enable_menu_notes' => 'Povolit poznámky u položek menu',
        'enable_menu_notes_description' => 'Přidá záložku Poznámky a pole pro zadání textu k položkám Static Pages Menu.',

        'enable_menu_image' => 'Povolit obrázek u položky menu',
        'enable_menu_image_description' => 'Umožní přidat k položce menu obrázek.',
        'enable_menu_color' => 'Povolit barvu u položky menu',
        'enable_menu_color_description' => 'Umožní nastavit barvu položky.',

        'enable_blog_author' => 'Umožnit změnu autora příspěvku',
        'enable_blog_author_description' => 'Pokud je zaškrtnuto, zobrazí v editaci článku výběr autora',

        'author' => 'Autor',
        'author_comment' => 'Nastavit autora tohoto příspěvku',
        'author_empty' => 'Není přiřazen',

        'static_pages_section' => 'Nová pole',

        'hide_content' => 'Skrýt záložku OBSAH',
        'hide_content_description' => 'Skryje záložku Obsah při editaci statické Stránky. Užitečné pro ty, kteří používají pro editaci obsahu stránek části definované pomocí {variable} a záložka Obsah v druhém panelu je trochu mate.',

        'custom_fields_section' => 'Vlastní pole',
        'custom_fields_section_description' => '',

        'custom_fields_hint_title' => 'Jak používat vlastní pole',
        'custom_fields_hint_line1' => 'Vlastní pole se zobrazí v editačním okně příspěvku Blogu na <strong>záložce Další</strong>.',
        'custom_fields_hint_line2' => 'Ve Twigu lze hodnoty vlastních polí článku zobrazit pomocí {{post.custom_fields.api_code}}.',
        'custom_fields_hint_line3' => 'Vlastním polím lze  <a target="_blank" href="https://octobercms.com/docs/plugin/localization#overriding">jednoduše upravit názvy a popisky pomocí překladů</a>.',

        'custom_fields_hint_title2' => 'Omezení',
        'custom_fields_hint_line3' => 'Nelze použít pole pro více jazyků. Řešení hledám.',

        'custom_fields_label' => 'Název tohoto pole (bude použitý ve formuláři příspěvku)',

        'custom_fields_api_code' => 'API kód',
        'custom_fields_api_code_description' => '',
        'enable_custom_fields_api_code' => 'Přidat pole pro Add API kód',
        'enable_custom_fields_api_code_description' => 'Twig: {{post.custom_fields.api_code}}',

        'custom_fields_string' => 'Krátký text',
        'custom_fields_string_description' => '',
        'enable_custom_fields_string' => 'Přidat Krátký text',
        'enable_custom_fields_string_description' => 'Twig: {{post.custom_fields.string}}',

        'custom_fields_switch' => 'Přepínač',
        'custom_fields_switch_description' => '',
        'enable_custom_fields_switch' => 'Přidat Přepínač',
        'enable_custom_fields_switch_description' => 'Twig: {{post.custom_fields.switch}}',

        'custom_fields_datetime' => 'Datum a čas',
        'custom_fields_datetime_description' => '',
        'enable_custom_fields_datetime' => 'Přidat Datum a čas',
        'enable_custom_fields_datetime_description' => 'Twig: {{post.custom_fields.datetime}}',

        'custom_fields_image' => 'Obrázek',
        'custom_fields_image_description' => '',
        'enable_custom_fields_image' => 'Přidat obrázek',
        'custom_fields_featured_image_description' => '',

        'custom_fields_featured_image' => 'Obrázek',
        'custom_fields_featured_image_description' => '',

        'custom_fields_featured_image_title' => 'Název obrázku',
        'custom_fields_featured_image_title_description' => '',
        'custom_fields_featured_image_alt' => 'Popis obrázku',
        'custom_fields_featured_image_alt_description' => '',

        'pages_menu_items_hint_title' => 'Varování',
        'pages_menu_items_hint_line1' => 'V pluginu statických stránek je momentálně chyba, která neumožňuje znovu zobrazit uložený obrázek položky menu!',
        'pages_menu_items_hint_line2' => 'Do doby, než bude chyba opravená, můžete použít <a target="_blank" href="https://github.com/rainlab/pages-plugin/pull/286">upravenou verzi pluginu</a>.',

        'wysiwyg_section' => 'WYSIWYG editor',
        'media_section' => 'Média',
        'settings_section' => 'Další nastavení',
        'custom_fields_section' => 'Vlastní pole',
        'menu_section' => 'Položky Menu',
        'static_page_section' => 'Obsah stránky',
        'server_info_section' => 'Informace o serveru',
        'twig_functions_allow' => 'Povolit nové funkce',
        'twig_functions_allow_description' => 'Přidá nové funkce pro Twig. Podívejte se prosím do dokumentace pro více informací.',

        'tab_blog' => 'Blog',
        'tab_blog_fields' => 'Vlastní pole příspěvku',
        'tab_static_pages' => 'Statické stránky',
        'tab_content' => 'Obsah',
        'tab_media' => 'Média',
        'tab_other' => 'Ostatní',
        'tab_custom_fields' => 'Vlastní pole',
        'tab_system' => 'Systémové informace',
        'tab_twig' => 'Twig',

        'php_info_box' => 'PHP info',


    ],
    'blog' => [
        'label' => 'Blog',
        'description' => 'Rozšíření pro Rainlab.Blog.',
    ],
    'static_menu' => [
        'notes' => 'Poznámky',
    'image' => 'Obrázek',
    'color' => 'Barva',
        'add_note' => 'Přidat poznámku k položce menu',
        'add_note_comment' => 'Přidá poznámku k této položce menu. Ta pak bude přístupná ze stránky/layoutu pomocí: {{item.viewBag.note}}.',
    'add_image' => 'Přidat obrázek',
    'add_image_comment' => 'Uložený obrazek se tu neobjeví.',
        'add_color' => 'Přidat barvu',
        'add_color_comment' => 'V HEX formátu (např.: #efefef)',
    ],
    'permissions' => [
        'settings_tab' => 'Drobná rozšíření',
        'settings_description' => 'Správa nastavení v administraci.',
    ],
    'tabs' => [
        'custom_fields' => 'Další',
    ]
];
