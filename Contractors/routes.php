<?php
return [
    '/^contractors$/' => [\Contractors\Controllers\MainController::class, 'main'],
    '/^contractors\/create$/' => [\Contractors\Controllers\MainController::class, 'main'],
    ];

/**
 * в контроллере прописать логику для удаления добавления
 * 2 метода - 1 форма, 2й обработка
 *
 * форма хтмл в виде
 * новая вьюха креате пхп
 *
 * добавить ссылку на основной странице (кнопки для перехода на след стр)
 */