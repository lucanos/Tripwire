# Tripwire

Need to know if your server-based files have changed? If new files have been added, or files have been deleted? Whether as part of your routine checks, or as remedial action after your server has been compromised, Tripwire can be used to check for changes in your file system and provide a simple list of those files which have been added, deleted or modified since the last time you ran **Tripwire**.

## How to use Tripwire

Simply upload these files to your webserver where they can be viewed through a web browser or triggered via SSH. Then do so. Tripwire will create an index of all the files it can detect, and a hash of their contents.

The next time you access or trigger Tripwire (or have a Cron job do the same), that index will be checked and compared to the new list of files and hashes and the differences will be shown.

## Licencing

<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png" /></a> This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International License</a>.

Exceptions: Tripwire can be used as part of a Commercial action (such as by an IT specialist who is investigating an attack on a server, etc.) but cannot be packaged and sold as a product.