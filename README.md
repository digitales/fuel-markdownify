fuel-markdownify
================

A markdownify package for FuelPHP


Markdownify converts HTML Markup to [Markdown][1] (by [John Gruber][2].
It also supports [Markdown Extra][3] by [Michel Fortin][4] via Markdownify_Extra.

It all started as `html2text.php` - a port of [Aaron Swartz'][5] [`html2text.py`][6] - but
got a long way since. This is far more than a mere port now!

Starting with version 2.0.0 this is a complete rewrite and cannot be
compared to Aaron Swatz' `html2text.py` anylonger. I'm now using a HTML parser
(see `parsehtml.php` which I also wrote) which makes most of the evil

RegEx magic go away and additionally it gives a much cleaner class structure.
Also notably is the fact that I now try to prevent regressions by utilizing testcases of Michel Fortin's [MDTest][7].

 [1]: http://daringfireball.com/projects/markdown
 [2]: http://daringfireball.com/
 [3]: http://www.michelf.com/projects/php-markdown/extra/
 [4]: http://www.michelf.com/
 [5]: http://www.aaronsw.com/
 [6]: http://www.aaronsw.com/2002/html2text/
 [7]: http://article.gmane.org/gmane.text.markdown.general/2540

 @version 2.0.0 alpha
 @author Milian Wolff (<mail@milianw.de>, <http://milianw.de>)
 @license LGPL, see LICENSE_LGPL.txt and the summary below
 @copyright (C) 2007  Milian Wolff

This library is free software; you can redistribute it and/or
modify it under the terms of the GNU Lesser General Public
License as published by the Free Software Foundation; either
version 2.1 of the License, or (at your option) any later version.

This library is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
Lesser General Public License for more details.

You should have received a copy of the GNU Lesser General Public
License along with this library; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA