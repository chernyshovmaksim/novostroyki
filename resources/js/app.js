require('./bootstrap');

import Alpine from 'alpinejs';
import referLink from './modules/refer-link';

window.Alpine = Alpine;

Alpine.start();

referLink();