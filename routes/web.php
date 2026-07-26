<?php

/**
 * Module Template Web Routes
 * 
 * Diese Datei definiert alle Web-Routes für das Modul.
 * 
 * WICHTIG FÜR LLMs:
 * - Routes werden automatisch mit dem Modul-Prefix versehen (aus Config)
 * - Middleware wird automatisch hinzugefügt (web, auth, etc.)
 * - Route-Namen sollten mit dem Modul-Prefix beginnen
 * 
 * BEISPIEL:
 * Route::get('/', Dashboard::class)->name('module-template.dashboard');
 * 
 * Wird zu: /module-template/ (wenn prefix = 'module-template')
 * 
 * @see Platform\Core\Routing\ModuleRouter für Details
 */

use Platform\ModuleTemplate\Livewire\Dashboard;
use Platform\ModuleTemplate\Livewire\Showcase;

/**
 * Dashboard Route
 *
 * Hauptübersicht des Moduls
 */
Route::get('/', Dashboard::class)->name('module-template.dashboard');

/**
 * nx-Showcase Route
 *
 * Lebendes Verzeichnis aller x-nx-* Komponenten (Design-Referenz).
 */
Route::get('/showcase', Showcase::class)->name('module-template.showcase');

/**
 * Weitere Routes hinzufügen:
 *
 * Route::get('/entities', Entity\Index::class)->name('module-template.entities.index');
 * Route::get('/entities/{entity}', Entity\Show::class)->name('module-template.entities.show');
 */
