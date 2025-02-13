<?php

/*
 * This file is part of SeAT
 *
 * Copyright (C) 2015 to 2022 Leon Jacobs
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
 */

return [
    '0home'       => [
        'name'          => 'home',
        'label'         => 'web::seat.home',
        'icon'          => 'fas fa-home',
        'route_segment' => 'home',
        'route'         => 'home',
    ],
    'alliance' => [
        'name'          => 'alliance',
        'label'         => 'web::seat.alliance',
        'plural'        => true,
        'icon'          => 'fas fa-city',
        'route_segment' => 'alliances',
        'entries'       => [
            [
                'name'  => 'all alliances',
                'label' => 'web::seat.all_alliance',
                'icon'  => 'fab fa-fort-awesome',
                'route' => 'alliance.list',
            ],
        ],
    ],
    'corporation' => [
        'name'          => 'corporation',
        'label'         => 'web::seat.corporation',
        'plural'        => true,
        'icon'          => 'fas fa-building',
        'route_segment' => 'corporation',
        'permission'    => 'whboo.corporation_viewer',
        'entries'       => [
            [
                'name'  => 'all corporations',
                'label' => 'web::seat.all_corp',
                'icon'  => 'fas fa-hotel',
                'route' => 'corporation.list',
            ],
        ],
    ],
    '1moon_extractions' => [
        'name' => 'Moon Extractions',
        'label' => 'Moon Extractions',
        'icon' => 'fas fa-moon',
        'permission' => 'whboo.extraction_viewer',
        'route_segment' => 'custom',
        // The Dark Space Initiative (for testing)
        // 'route' => 'corporations/1705300610/extractions',
        // TDSIN Executive
        'route' => 'https://whboo.com/corporations/98619921/extractions',
        'new_tab' => false,
    ],
    '2ore_buyback' => [
        'name' => 'Ore Buyback',
        'label' => 'Ore Buyback',
        'icon' => 'fas fa-file-invoice-dollar',
        'permission' => 'whboo.link_viewer',
        'route_segment' => 'custom',
        // The Dark Space Initiative (for testing)
        // 'route' => 'corporations/1705300610/extractions',
        // TDSIN Executive
        'route' => 'https://docs.google.com/spreadsheets/d/1n7zC5gTtpZ_--iHVuONtgl3K2qdjLTZ2xVwQbR2fvpY/edit#gid=1661123201',
        'new_tab' => true,
    ],
    '3Moon Pull Schedule' => [
        'name' => 'Moon Pull Schedule',
        'label' => 'Moon Pull Schedule',
        'icon' => 'fas fa-calendar-alt',
        'permission' => 'whboo.link_viewer',
        'route_segment' => 'custom',
        // The Dark Space Initiative (for testing)
        // 'route' => 'corporations/1705300610/extractions',
        // TDSIN Executive
        'route' => 'https://docs.google.com/spreadsheets/d/1earDo014B9tY-zCeKyKHWPT8fxF761tfqLyJPpMERXA/edit#gid=0',
        'new_tab' => true,
    ],
    '4moon_taxes_sheet' => [
        'name' => 'Moon Taxes Owed',
        'label' => 'Moon Taxes Owed',
        'icon' => 'fas fa-receipt',
        'permission' => 'whboo.link_viewer',
        'route_segment' => 'custom',
        // The Dark Space Initiative (for testing)
        // 'route' => 'corporations/1705300610/extractions',
        // TDSIN Executive
        'route' => 'https://docs.google.com/spreadsheets/d/1v3Qxhu45ygGU9inq5sKedPE5mEqjQyqucDbMMSOUmoo/edit',
        'new_tab' => true,
    ],
    '5diplo_sheet' => [
        'name' => 'Diplo Sheet',
        'label' => 'Diplo Sheet',
        'icon' => 'fas fa-handshake',
        'permission' => 'whboo.link_viewer',
        'route_segment' => 'custom',
        // The Dark Space Initiative (for testing)
        // 'route' => 'corporations/1705300610/extractions',
        // TDSIN Executive
        'route' => 'https://docs.google.com/spreadsheets/d/1n7zC5gTtpZ_--iHVuONtgl3K2qdjLTZ2xVwQbR2fvpY/edit#gid=1661123201',
        'new_tab' => true,
    ],
    'character'   => [
        'name'          => 'character',
        'label'         => 'web::seat.character',
        'plural'        => true,
        'icon'          => 'fas fa-user',
        'route_segment' => 'characters',
        'entries'       => [
            [
                'name'  => 'all characters',
                'label' => 'web::seat.all_char',
                'icon'  => 'fas fa-users',
                'route' => 'character.list',
            ],
            [
                'name'       => 'mail timeline',
                'label'      => 'web::seat.mail_timeline',
                'icon'       => 'fas fa-envelope',
                'route'      => 'character.view.mail.timeline',
                'permission' => 'whboo.recruiter'
            ],
        ],
    ],
    'squads'      => [
        'name'          => 'squads',
        'label'         => 'web::squads.squad',
        'plural'        => true,
        'icon'          => 'fas fa-user-friends',
        'route_segment' => 'squads',
        'route'         => 'squads.index',
        'permission'    => 'whboo.squad_viewer'
    ],
    'settings'    => [
        'name'          => 'configuration',
        'label'         => 'web::seat.configuration',
        'permission'    => 'global.superuser',
        'icon'          => 'fas fa-cogs',
        'route_segment' => 'configuration',
        'entries'       => [

            [   // Access
                'name'  => 'access',
                'label' => 'web::seat.access',
                'icon'  => 'fas fa-shield-alt',
                'route' => 'configuration.access.roles',
            ],
            [   // Users
                'name'   => 'user',
                'plural' => true,
                'label'  => 'web::seat.user',
                'icon'   => 'fas fa-user',
                'route'  => 'configuration.users',
            ],
            [   // Schedule
                'name'  => 'schedule',
                'label' => 'web::seat.schedule',
                'icon'  => 'far fa-clock',
                'route' => 'configuration.schedule',
            ],
            [   // Sso
                'name'  => 'sso',
                'label' => 'web::seat.sso',
                'icon'  => 'fas fa-user-circle',
                'route' => 'configuration.sso',
            ],
            [   // SeAT Setting
                'name'  => 'settings',
                'label' => 'web::seat.settings',
                'icon'  => 'fas fa-cog',
                'route' => 'seat.settings.view',
            ],
            [   // Security
                'name'  => 'security logs',
                'label' => 'web::seat.security_logs',
                'icon'  => 'fas fa-list',
                'route' => 'configuration.security.logs',
            ],
            [
                // About
                'name'  => 'about',
                'label' => 'web::seat.about',
                'icon'  => 'fas fa-info',
                'route' => 'seat.settings.about',
            ],
        ],
    ],
    'tools'       => [
        'name'          => 'tools',
        'label'         => 'web::seat.tools',
        'icon'          => 'fas fa-wrench',
        'route_segment' => 'tools',
        'entries'       => [
            [
                'name'       => 'standing profiles',
                'label'      => 'web::seat.standings_builder',
                'icon'       => 'fas fa-address-book',
                'permission' => 'global.standing_builder',
                'route'      => 'tools.standings',
            ],
            [
                'name'       => 'moons reporter',
                'label'      => 'web::seat.moons_reporter',
                'icon'       => 'fas fa-moon',
                'permission' => 'moon.view_moon_reports',
                'route'      => 'tools.moons.index',
            ],
        ],
    ],
];
