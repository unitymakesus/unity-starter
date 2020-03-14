import initMainMenu from '../util/initMainMenu';
import gfLabelSwap from '../util/gfLabelSwap';
import a11yToolbar from '../util/a11yToolbar';

export default {
  init() {
    initMainMenu();
    a11yToolbar();
  },
  finalize() {
    // Gravity Forms label controls
    gfLabelSwap();

    // Form select controls
    $('.gfield select').formSelect();
    $('.acf-field select').formSelect();
  },
};
