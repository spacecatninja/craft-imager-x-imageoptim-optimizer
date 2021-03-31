# ImageOptim optimizer for Imager X

A plugin for adding an optimizer that uses [ImageOptim](https://imageoptim.com/api) to Imager X.   
Also, an example of 
[how to make a custom optimizer for Imager X](https://imager-x.spacecat.ninja/extending.html#optimizers).

## Requirements

This plugin requires Craft CMS 3.3.0 or later, and Imager X 3.0 or later.
 
_Please note, this optimizer was previously part of Imager X' core, but has been
separated out because the underlying PHP package doesn't support PHP 8.0. Until it 
does, you're currently locked into PHP 7.x if you continue using this optimizer._   


## Installation

To install the plugin, follow these instructions:

1. Install with composer via `composer require spacecatninja/imager-x-imageoptim-optimizer` from your project directory.
2. Install the plugin in the Craft Control Panel under Settings > Plugins, or from the command line via `./craft plugin/install imager-x-imageoptim-optimizer`.


## Usage

After installing the plugin, you can use the `imageoptim` optimzier in your
imager-x.php config file the same way as you would any other optimizer:

```
'optimizers' => ['imageoptim'],
'optimizerConfig' => [
    'imageoptim' => [
        'extensions' => ['png', 'jpg', 'gif'],
        'apiUsername' => 'yourusername',
        'quality' => 'medium'
    ],
],
```



Price, license and support
---
The plugin is released under the MIT license. It requires Imager X, which is a commercial 
plugin [available in the Craft plugin store](https://plugins.craftcms.com/imager-x). If you 
need help, or found a bug, please post an issue in this repo, or in Imager X' repo. 
