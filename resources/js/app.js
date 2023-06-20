import './bootstrap';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
import React from 'react';
window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();
