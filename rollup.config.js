import autoprefixer from 'autoprefixer'
import cssnano from 'cssnano'
import postcss from 'rollup-plugin-postcss'
import postcssImport from 'postcss-import'
import tailwindcss from 'tailwindcss'
import resolve from '@rollup/plugin-node-resolve'

export default [
  {
    input: 'css/castle.css',
    output: {
      file: 'dist/css/castle.css'
    },
    plugins: [
      postcss({
        plugins: [
          postcssImport(),
          tailwindcss(),
          autoprefixer(),
          cssnano()
        ],
        sourceMap: true,
        modules: false,
        extract: true
      })
    ],
    watch: {
      include: ['js/**', 'css/**', 'components/**', 'templates/**'],
      exclude: 'node_modules/**'
    }
  },
  {
    input: 'js/castle.js',
    output: {
      file: 'dist/js/castle.min.js',
      format: 'iife',
      sourcemap: true
    },
    plugins: [
      resolve(),
    ],
    watch: {
      include: ['js/**', 'components/**'],
      exclude: 'node_modules/**'
    }
  }
]