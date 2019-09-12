const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

module.exports = {
  mode: 'development',
  watch: true,
  entry: './wp-content/themes/lrc/src/js/index.js',
  output: {
    filename: 'index.js',
    path: path.resolve(__dirname, './wp-content/themes/lrc/dist')
  },
  plugins: [
    new MiniCssExtractPlugin({ 
      filename: 'style.css'
    }),
    new BrowserSyncPlugin({
      host: 'localhost',
      port: 3000,
      files: ["./wp-content/themes/lrc/*"],
      proxy: 'https://latinroguecleaning.dev.cc',
      https: true
    })
  ],
  module: {
    rules: [
      {
        test: /\.scss$/,
        use: [MiniCssExtractPlugin.loader, 'css-loader', 'sass-loader'] //reverse order
      },
      {
        test: /\.(svg|png|jpg|gif)$/,
        use: {
          loader: 'file-loader',
          options: {
            name: '[name].[ext]',
            outputPath: 'images'
          }
        }
      },
      {
        test: /\.(eot|ttf|woff)$/,
        use: {
          loader: 'file-loader',
          options: {
            name: '[name].[ext]',
            outputPath: 'fonts'
          }
        }
      }
    ]
  }
};