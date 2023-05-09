import clean from './config/clean.js';
import create from './config/create.js';
import parseEnv from './config/parseEnv.js';
import manifest from './config/manifest.js';
import build from './config/build.js';
import components from './config/components.js';
import scripts from './config/scripts.js';
import styles from './config/styles.js';
import watch from './config/watch.js';

export default build;

export { clean, create, parseEnv, manifest, components, scripts, styles, build, watch };
