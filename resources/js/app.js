import './bootstrap';
import Alpine from 'alpinejs';
import Mask from '@alpinejs/mask';

window.Alpine = Alpine;
Alpine.plugin(Mask);
Alpine.start();
