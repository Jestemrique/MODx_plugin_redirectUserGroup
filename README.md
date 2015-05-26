# MODx_plugin_redirectUserGroup
Plugin to rediret users depending on their group.

Found on:
http://www.virtudraft.com/blog/redirect-specified-usergroups-after-logged-in.html
written by: Novriko P. Parhusip
https://github.com/goldsky

##Usage
There's been a need for the MODX developer to set the Login snippet to redirect the users to a particular page according to their usergroups.
Unfortunatelly, this Login snippet (version 1.7.3 at the time of this writing) does not provide the way to do this. I've dug deep into the source code, and apparently it would need a big change to some methods.
I've tried to use the &postHooks property to deal with it, but it didn't work. This &postHooks method does not provide any value to make me able to retrieve the usergroup's name using the MODX's getUserGroupNames() method. The $hook->modx->user->getUserGroupNames() only works AFTER the page is loaded.
At last, I found interesting codes inside the redirectAfterLogin() method that's originally used to process the &loginResourceId property.
So, I ended up to not using the &postHooks and of course the &loginResourceId properties anymore, but using plugin that's triggered on OnWebLogin when the MODX's login processor is called. Basically, it overrides the $_REQUEST['redirectBack'].
So, the snippet call is only [ [!Login]], but you can add more properties except &loginResourceId. You can keep using the &postHooks if you have other hooks with it.
Just create a plugin, with any name, and then select OnWebLogin in the System Events tab.

