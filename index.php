<!DOCTYPE html>
<html class="no-js" xmlns="http://www.w3.org/1999/html">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Magento Certification Study Guide</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/normalize.min.css">
    <link type="text/css" href="css/start/jquery-ui-1.8.24.custom.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/main.css">
    <script src="js/vendor/modernizr-2.6.1.min.js"></script>
  </head>
  <body>
  <script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-3215352-54']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

  </script>
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
      fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
  <div class="page">
  <a href="https://github.com/marcinsdance/magentostudyguide.com"><img class="forkme" src="https://s3.amazonaws.com/github/ribbons/forkme_right_green_007200.png" alt="Fork me on GitHub"></a>
  <div class="wrapper">
      <div class="logo"><a href="/"><h1>MageStudyGuide.com</h1></a><h2>Magento Certified Developer study guide.</h2>
      <div class="socials"><!-- socials -->
          <!-- Google Plus button -->
          <div class="g-plusone" data-annotation="inline" data-width="240"></div>
          <script type="text/javascript">
              (function() {
                  var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                  po.src = 'https://apis.google.com/js/plusone.js';
                  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
              })();
          </script>
          <!-- end Google Plus button -->
          <!-- Twitter button -->
          <a href="https://twitter.com/magentostudy" class="twitter-follow-button" data-show-count="false">Follow @magentostudy</a>
          <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
          <!-- end Twitter button -->
          <!-- Facebook button -->
          <!--<div class="fb-like" data-href="http://www.magentostudyguide.com/" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false"></div>-->
          <!-- end Facebook button -->
      </div><!-- end socials -->
      </div><!-- end wrapper -->
      <div class="description">
          <h2>Welcome!</h2>
          <h3></h3>
      </div>
  </div>
  <div class="accordion">
  <h3>1- Basics - 6% of the exam.</h3>
  <ul class="one">
    <li><h4>High-level Magento architecture</h4>
      <ul>
        <li>1. <a href="/answers/1.html" class="file">Describe Magento codepools</a></li>
        <li>2. <a href="/answers/2.html" class="file">Describe typical Magento module structure</a></li>
        <li>3. <a href="/answers/3.html" class="file">Describe Magento templates and layout files location</a></li>
        <li>4. <a href="/answers/4.html" class="file">Describe Magento skin and javascript files location</a></li>
        <li>5. <a href="/answers/5.html" class="file">Identify and explain the main Magento design areas (adminhtml and frontend)</a></li>
        <li>6. <a href="/answers/6.html" class="file">Explain class naming conventions and their relationship with the autoloader</a></li>
        <li>7. <a href="/answers/7.html" class="file">Describe methods for resolving module conflicts</a></li>
      </ul>
      <h5>Questions</h5>
      <ul>
        <li>How does the framework interact with the various codepools?</li>
        <li><a href="/answers/1q2.html" class="file">What constitutes a namespace and a module?</a></li>
        <li>What does the structure of a complete theme look like?</li>
      </ul>
      <h5>Reference files</h5>
      <ul>
        <li><a href="/magento/app/code/core/Mage/Core/Model/App.php" class="file">Mage_Core_Model_App</a></li>
        <li><a href="/magento/app/code/core/Mage/Core/Model/Config.php" class="file">Mage_Core_Model_Config</a></li>
        <li><a href="/magento/lib/Varien/Autoload.php" class="file">Varien_Autoload</a></li>
      </ul>
    </li>
    <li><h4>Magento configuration</h4>
      <ul>
        <li>8. <a href="/answers/8.html" class="file">Explain how Magento loads and manipulates configuration information</a></li>
        <li>9. <a href="/answers/9.html" class="file">Describe class group configuration and use in factory methods</a></li>
        <li>10. <a href="/answers/10.html" class="file">Describe the process and configuration of class overrides in Magento</a></li>
        <li>11. <a href="/answers/11.html" class="file">Register an Observer</a></li>
        <li>12. Identify the function and proper use of automatically available events, including *_load_after, etc.</li>
        <li>13. <a href="/answers/13.html" class="file">Set up a cron job</a></li>
      </ul>
      <h5>Questions</h5>
      <ul>
        <li>How does the framework discover active modules and their configuration?</li>
        <li>What are the common methods with which the framework accesses its configuration values and areas?</li>
        <li>How are per-store configuration values established in the XML DOM?</li>
        <li>By what process do the factory methods and autoloader enable class instantiation?</li>
        <li>Which class types have configured prefixes, and how does this relate to class overrides?</li>
        <li>Which class types and files have explicit paths?</li>
        <li>What configuration parameters are available for event observers?</li>
        <li>What are the interface and configuration options for automatically fired events?</li>
        <li>What is the structure of event observers, and how are properties accessed therein?</li>
        <li>What configuration parameters are available for cron jobs?</li>
      </ul>
      <h5>Reference files</h5>
      <ul>
        <li><a href="/magento/app/code/core/Mage/Core/Model/App/Area.php" class="file">Mage_Core_Model_App_Area</a></li>
        <li><a href="/magento/app/code/core/Mage/Core/Model/Config.php" class="file">Mage_Core_Model_Config</a></li>
        <li><a href="/magento/app/code/core/Mage/Core/Model/Store.php" class="file">Mage_Core_Model_Store</a></li>
        <li><a href="/magento/lib/Varien/Event/Observer.php" class="file">Varien_Event_Observer</a></li>
      </ul>
    </li>
    <li><h4>Internationalization</h4>
      <ul>
        <li>14. Describe how to plan for internationalization of a Magento site</li>
        <li>15. Describe the use of Magento translate classes and translate files</li>
        <li>16. Describe the advantages and disadvantages of using subdomains and subdirectories in internationalization</li>
      </ul>
      <h5>Questions</h5>
      <ul>
        <li>Which method is used for translating strings, and on which types of objects is it generally available?</li>
        <li>In what way does the developer mode influence how Magento handles translations?</li>
        <li>How many options exist to add a custom translation for any given string?</li>
        <li>What is the priority of translation options?</li>
        <li>How are translation conflicts (when two modules translate the same string) processed by Magento?</li>
      </ul>
      <h5>Reference files</h5>
      <ul>
        <li><a href="/magento/app/code/core/Mage/Core/Model/Translate.php" class="file" id="file18">Mage_Core_Model_Translate::init()</a></li>
        <li><a href="/magento/app/code/core/Mage/Core/Model/Locale.php" class="file" id="file19">Mage_Core_Model_Locale::emulate()</a></li>
      </ul>
    </li>
  </ul>

  <h3>2- Request Flow - 7% of the exam.</h3>
  <ul class="one">
    <li><h4>Application initialization</h4>
      <ul>
        <li>17. <a href="answers/217.html" class="file">Describe the steps for application initialization</a></li>
        <li>18. Describe the role of the system entrypoint, index.php</li>
      </ul>
      <h5>Questions</h5>
      <ul>
        <li>Starting with the index.php, including Mage.php, follow through the steps Magento takes to set up the run time environment.</li>
        <li>How and when is the include path set up and the auto loader registered?</li>
        <li>How and when does Magento load the base configuration, the module configuration, and the database configuration?</li>
        <li>How and when are the two main types of setup script executed?</li>
        <li>When does Magento decide which store view to use, and when is the current locale set?</li>
        <li>Which ways exist in Magento to specify the current store view?</li>
        <li>When are the request and response objects initialized?</li>
      </ul>
      <h5>Reference files</h5>
      <ul>
        <li><a href="/magento/index.php" class="file">index.php</a></li>
        <li><a href="/magento/app/code/core/Mage/Core/Model/App.php" class="file" id="file22">Mage_Core_Model_App::run()</a></li>
        <li><a href="/magento/app/code/core/Mage/Core/Model/Config.php" class="file" id="file23">Mage_Core_Model_Config::loadBase() and init()</a></li>
      </ul>
    </li>
    <li><h4>Front Controller</h4>
      <ul>
        <li>19. Describe the role of the Front Controller</li>
        <li>20. Identify uses for events fired in the Front Controller</li>
      </ul>
      <h5>Questions</h5>
      <ul>
        <li>Which ways exist in Magento to add router classes?</li>
        <li>What are the differences between the various ways to add routers?</li>
        <li>Think of possible uses for each of the events fired in the front controller</li>
      </ul>
      <h5>Reference files</h5>
      <ul>
        <li><a href="/magento/app/code/core/Mage/Core/Controller/Varien/Front.php" class="file" id="file24">Mage_Core_Controller_Varien_Front::init() and dispatch()</a></li>
      </ul>
    </li>
    <li><h4>URL rewrites</h4>
      <ul>
        <li>21. Describe URL structure/processing in Magento</li>
        <li>22. Describe the URL rewrite process</li>
      </ul>
      <h5>Questions</h5>
      <ul>
        <li>Focus on the internals of database-based URL rewrites.</li>
        <li>What is the purpose of each of the fields in the core_url_rewrite table?</li>
        <li>When does Magento created the rewrite records for categories and products?</li>
        <li>How and where does Magento find a matching record for the current request?</li>
      </ul>
      <h5>Reference files</h5>
      <ul>
        <li><a href="/magento/app/code/core/Mage/Core/Controller/Varien/Front.php" class="file" id="file25">Mage_Core_Controller_Varien_Front::dispatch()</a></li>
        <li><a href="/magento/app/code/core/Mage/Core/Model/Url/Rewrite.php" class="file" id="file26">Mage_Core_Model_Url_Rewrite::rewrite()</a></li>
      </ul>
    </li>
    <li><h4>Request routing</h4>
      <ul>
        <li>23. Describe request routing/request flow in Magento</li>
        <li>24. Describe how Magento determines which controller to use and how to customize route-to-controller resolution</li>
      </ul>
      <h5>Questions</h5>
      <ul>
        <li>Starting with the front controller delegating the process of mapping a request to a controller action, study the steps that occur until a controller action is dispatched.</li>
        <li>Which routers exist in a native Magento implementation?</li>
        <li>How does the standard router map a request to a controller class?</li>
        <li>How does the standard router build the filesystem path to a file that might contain a matching action controller?</li>
        <li>How does Magento process requests that cannot be mapped?</li>
        <li>After a matching action controller is found, what steps occur before the action method is executed?</li>
      </ul>
      <h5>Reference files</h5>
      <ul>
        <li><a href="/magento/app/code/core/Mage/Core/Controller/Varien/Front.php" class="file" id="file27">Mage_Core_Controller_Varien_Front::init()</a></li>
        <li><a href="/magento/app/code/core/Mage/Core/Controller/Varien/Router/Standard.php" class="file" id="file28">Mage_Core_Controller_Varien_Router_Standard::collectRoutes() and match()</a></li>
      </ul>
    </li>
    <li><h4>Module initialization</h4>
      <ul>
        <li>25. Describe the steps needed to create and register a new module</li>
        <li>26. Describe the effect of module dependencies</li>
        <li>27. Describe different types of configuration files and the priorities of their loading</li>
      </ul>
      <h5>Questions</h5>
      <ul>
        <li>What does "Magento loads modules" mean?</li>
        <li>In which order are Magento modules loaded?</li>
        <li>Which core class loads modules?</li>
        <li>Which core class loads modules?</li>
        <li>What are the consequences of one module depending on another module?</li>
        <li>During the initialization of Magento, when are modules loaded in?</li>
        <li>Why is the load order important?</li>
        <li>What is the difference regarding module loading between Mage::run() and Mage::app()?</li>
      </ul>
      <h5>Reference files</h5>
      <ul>
        <li><a href="/magento/app/Mage.php" class="file" id="file29">Mage::run() and Mage::app()</a></li>
        <li><a href="/magento/app/code/core/Mage/Core/Model/App.php" class="file" id="file30">Mage_Core_Model_App::run() and init()</a></li>
      </ul>
    </li>
    <li><h4>Design and layout initialization</h4>
      <ul>
        <li>
          <ul>28. Identify the steps in the request flow in which:
            <li>1. Design data is populated</li>
            <li>2. Layout configuration files are parsed</li>
            <li>3. Layout is compiled</li>
            <li>4. Output is rendered</li>
          </ul>
        </li>
      </ul>
      <h5>Questions</h5>
      <ul>
        <li>Which ways exist to specify the layout update handles that will be processed during a request?</li>
        <li>Which classes are responsible for the layout being loaded?</li>
        <li>How are layout xml directives processed?</li>
        <li>Which configuration adds a file containing layout xml updates to a module?</li>
        <li>Why is the load order of layout xml files important?</li>
      </ul>
      <h5>Reference files</h5>
      <ul>
        <li><a href="/magento/app/code/core/Mage/Core/Controller/Varien/Action.php" class="file" id="file31">Mage_Core_Controller_Varien_Action::loadLayout()</a></li>
        <li><a href="/magento/app/code/core/Mage/Core/Model/Layout.php" class="file" id="file32">Mage_Core_Model_Layout::__construct()</a></li>
        <li><a href="/magento/app/code/core/Mage/Core/Model/Layout/Update.php" class="file" id="file33">Mage_Core_Model_Layout_Update::load()</a></li>
      </ul>
    </li>
    <li><h4>Flushing data (output)</h4>
      <ul>
        <li>29. Describe how and when Magento renders content to the browser</li>
        <li>30. Describe how and when Magento flushes output variables using the Front Controller</li>
      </ul>
      <h5>Questions</h5>
      <ul>
        <li>This objective covers the response object as well as combining javascript and CSS files.</li>
        <li>Which events are associated with sending output?</li>
        <li>Which class is responsible for sending output?</li>
        <li>What are possible issues when this output is not sent to the browser using the typical output mechanism, but is instead sent to the browser directly?</li>
        <li>How are redirects handled?</li>
      </ul>
      <h5>Reference files</h5>
      <ul>
        <li><a href="/magento/app/code/core/Mage/Core/Controller/Varien/Front.php" class="file" id="file34">Mage_Core_Controller_Varien_Front::dispatch()</a></li>
        <li><a href="/magento/app/code/core/Mage/Core/Controller/Response/Http.php" class="file">Mage_Core_Controller_Response_Http and super classes</a></li>
        <li><a href="/magento/app/code/core/Mage/Page/Block/Html/Head.php" class="file" id="file36">Mage_Page_Block_Html_Head::getCssJsHtml()</a></li>
      </ul>
    </li>
  </ul>

  <h3>3- Rendering - 7% of the exam.</h3>
  <ul class="one">
    <li><h4>Themes in Magento</h4>
      <ul>
        <li>31. Define and describe the use of themes in Magento</li>
        <li>32. Define and describe the use of design packages</li>
        <li>33. Describe the process of defining template file paths</li>
      </ul>
      <h5>Questions</h5>
      <ul>
        <li>(Ad.1) How you can use themes to customize core functionality?</li>
        <li>(Ad.1) How can you implement different designs for different stores using Magento themes?</li>
        <li>(Ad.1) In which two ways you can register custom theme?</li>
        <li>(Ad.2) What is the difference between package and theme?</li>
        <li>(Ad.2) What happens if the requested file is missed in your theme/package?</li>
        <li>(Ad.3) Which kind of paths (absolute or relative) does Magento use for templates and layout files?</li>
        <li>(Ad.3) How exactly can Magento define which physical file correspond to certain template/layout to use?</li>
        <li>(Ad.3) Which classes and methods need to be rewritten in order to add additional directories to the fallback list?</li>
      </ul>
      <h5>Reference files</h5>
      <ul>
        <li>(Ad.1,2) <a href="/magento/app/code/core/Mage/Core/Model/Layout.php" class="file">Mage_Core_Model_Layout</a></li>
        <li>(Ad.1,2) <a href="/magento/app/code/core/Mage/Core/Model/Layout/Update.php" class="file">Mage_Core_Model_Layout_Update</a></li>
        <li>(Ad.1,2,3) <a href="/magento/app/code/core/Mage/Core/Model/Design.php" class="file">Mage_Core_Model_Design</a></li>
        <li>(Ad.1,2,3) <a href="/magento/app/code/core/Mage/Core/Model/Design/Package.php" class="file">Mage_Core_Model_Design_Package</a></li>
        <li>(Ad.2,3) <a href="/magento/app/code/core/Mage/Core/Block/Template.php" class="file">Mage_Core_Block_Template</a></li>
      </ul>
    </li>
    <li><h4>Blocks</h4>
      <ul>
        <li>34. Describe the programmatic structure of blocks</li>
        <li>35. Describe the relationship between templates and blocks</li>
        <li>36. <a href="/answers/336.html" class="file">Describe the stages in the lifecycle of a block</a></li>
        <li>37. Describe events fired in blocks</li>
        <li>38. <a href="/answers/338.html" class="file">Identify different types of blocks</a></li>
        <li>39. Describe block instantiation</li>
        <li>40. <a href="/answers/340.html" class="file">Explain different mechanisms for disabling block output</a></li>
        <li>41. Describe how a typical block is rendered</li>
      </ul>
      <h5>Questions</h5>
      <ul>
        <li>(Ad.1) What are blocks used for in Magento?</li>
        <li>(Ad.1) <a href="/answers/3q10.html" class="file">What is the parent block for all Magento blocks?</a></li>
        <li>(Ad.1) <a href="/answers/3q11.html" class="file">Which class does each block that uses a template extend?</a></li>
        <li>(Ad.1) In which way does a template block store information about its template file? Does it store an absolute or a relative path to the template?</li>
        <li>(Ad.1) What is the role of the Mage_Core_Block_Abstract class?</li>
        <li>(Ad.2) Can any block in Magento use a template file?</li>
        <li>(Ad.2) How does the $this variable work inside the template file?</li>
        <li>(Ad.2) Is it possible to render a template without a block in Magento?</li>
        <li>(Ad.2) Is it possible to have a block without a template in Magento?</li>
        <li>(Ad.3) Which class is responsible for creating an instance of the block?</li>
        <li>(Ad.3) Which class is responsible for figuring out which blocks should be created for certain pages?</li>
        <li>(Ad.3) How is the tree of blocks typically rendered?</li>
        <li>(Ad.3) Is it possible to create an instance of the block and render it on the page without using the Magento layout?</li>
        <li>(Ad.3) Is it possible to create an instance of the block and add it to the current layout manually?</li>
        <li>(Ad.3) <a href="/answers/3q23.html" class="file">How are a  block's children rendered? Once you added a child to the block, can you expect it will be rendered automatically?</a></li>
        <li>(Ad.3) What is a difference in rendering process for different types of blocks?</li>
        <li>(Ad.4) How can block output be caught using an observer?</li>
        <li>(Ad.4) What events do Mage_Core_Block_Abstract and Mage_Core_Block_Template fire?</li>
        <li>(Ad.5) What is the purpose of each of the following block types:
          <ul>
            <li>Mage_Core_Block_Template</li>
            <li>Mage_Core_Block_Text_List</li>
            <li>Mage_Core_Block_Text</li>
          </ul>
        </li>
        <li>(Ad.36) <a href="/answers/q336.html" class="file">Which block type renders its children automatically?</a></li>
        <li>(Ad.5) Which block type is usually used for a pages?</li>
        <li>(Ad.6) How can a template's block instance be accessed inside the template file, and how can other block instances be accessed?</li>
        <li>(Ad.6) <a href="/answers/3q28.html" class="file">How can block instances be accessed from the controller?</a></li>
        <li>(Ad.6) <a href="/answers/3q29.html" class="file">How can block instances be accessed inside install scripts or other model class instances?</a></li>
        <li>(Ad.7) In which ways can block output be disabled in Magento?</li>
        <li>(Ad.7) Which method can be overridden to control block output?</li>
        <li>(Ad.8) Which class performs rendering of the template?</li>
        <li>(Ad.8) Which classes are responsible for figuring out the absolute path for including the template file?</li>
        <li>(Ad.8) In which method are templates rendered?</li>
        <li>(Ad.8) How can output buffering be enabled/disabled when templates are rendered?</li>
      </ul>
      <h5>Reference files</h5>
      <ul>
        <li>(Ad.1,3,6,7,8) <a href="/magento/app/code/core/Mage/Core/Model/Layout.php" class="file">Mage_Core_Model_Layout</a></li>
        <li>(Ad.1,3,6,8) <a href="/magento/app/code/core/Mage/Core/Model/Layout/Update.php" class="file">Mage_Core_Model_Layout_Update</a></li>
        <li>(Ad.1,2,3,5,8) <a href="/magento/app/code/core/Mage/Core/Block/Template.php" class="file">Mage_Core_Block_Template</a></li>
        <li>(Ad.1,2,3,4,5,8) <a href="/magento/app/code/core/Mage/Core/Block/Abstract.php" class="file">Mage_Core_Block_Abstract</a></li>
        <li>(Ad.1) <a href="/magento/app/code/core/Mage/Adminhtml/Block/Abstract.php" class="file">Mage_Adminhtml_Block_Abstract</a></li>
        <li>(Ad.3,5) <a href="/magento/app/code/core/Mage/Core/Block/Text.php" class="file">Mage_Core_Block_Text</a></li>
        <li>(Ad.3,5) <a href="/magento/app/code/core/Mage/Core/Block/Text/List.php" class="file">Mage_Core_Block_Text_List</a></li>
        <li>(Ad.5) Mage/Core/Block/*</li>
        <li>(Ad.5) <a href="/magento/app/code/core/Mage/Page/Block/Html/Head.php" class="file">Mage_Page_Block_Html_Head</a></li>
        <li>(Ad.6) <a href="/magento/app/code/core/Mage/Core/Controller/Varien/Action.php" class="file">Mage_Core_Controller_Varien_Action</a></li>
      </ul>
    </li>
    <li><h4>Design layout, XML schema, and CMS content directives</h4>
      <ul>
        <li>42. Describe the elements of Magento's layout XML schema, including the major layout directives</li>
        <li>43. Register layout XML files</li>
        <li>44. Create and add code to pages</li>
        <li>45. Explain how variables can be passed to block instances via layout XML</li>
        <li>46. Describe various ways to add and customize javascript to specific request scopes</li>
      </ul>
      <h5>Questions</h5>
      <ul>
        <li>(Ad.1) How are &lt;update /&gt;, &lt;block /&gt;, and &lt;action /&gt; used in Magento layout?</li>
        <li>(Ad.1) Which classes and methods determine which nodes from layout XML correspond to certain urls?</li>
        <li>(Ad.2) How can layout XML files be registered for the frontend and adminhtml areas?</li>
        <li>(Ad.3) How can code be modified or added to Magento pages using the following methods?
          <ul>
            <li>- Template customizations</li>
            <li>- Layout customizations</li>
            <li>- Overriding block classes</li>
            <li>- Registering observers on general block events</li>
          </ul>
        </li>
        <li>(Ad.3) In which circumstances are each of the above methods more or less appropriate than others?</li>
        <li>(Ad.4) How can variables be passed to the block using the following methods?
          <ul>
            <li>- From layout xml file</li>
            <li>- From controller</li>
            <li>- From one block to another</li>
            <li>- From an arbitrary location (for example, install/upgrade scripts, models)</li>
          </ul>
        </li>
        <li>(Ad.4) In which circumstances are each of the above methods more or less appropriate than others?</li>
        <li>(Ad.5) Which block is responsible for rendering javascript in Magento?</li>
        <li>(Ad.5) Which modes of including javascript does Magento support?</li>
        <li>(Ad.5) Which classes and files should be checked if a link to a custom javascript file</li>
      </ul>
      <h5>Reference files</h5>
      <ul>
        <li>(Ad.1,4) <a href="/magento/app/code/core/Mage/Core/Model/Layout.php" class="file">Mage_Core_Model_Layout</a></li>
        <li>(Ad.1) <a href="/magento/app/code/core/Mage/Core/Model/Layout/Update.php" class="file">Mage_Core_Model_Layout_Update</a></li>
        <li>(Ad.1,3,4,5) <a href="/magento/app/code/core/Mage/Core/Block/Abstract.php" class="file">Mage_Core_Block_Abstract</a></li>
        <li>(Ad.2) <a href="/magento/app/code/core/Mage/Core/Model/Layout/Update.php" class="file">Mage_Core_Model_Layout_Update</a></li>
        <li>(Ad.3,4) <a href="/magento/app/code/core/Mage/Core/Controller/Varien/Action.php" class="file">Mage_Core_Controller_Varien_Action</a></li>
        <li>(Ad.3,4,5) Mage/Core/Block/*</li>
        <li>(Ad.3,4,5) <a href="/magento/app/code/core/Mage/Core/Block/Template.php" class="file">Mage_Core_Block_Template</a></li>
        <li>(Ad.3,4,5) <a href="/magento/app/code/core/Mage/Core/Block/Text.php" class="file">Mage_Core_Block_Text</a></li>
        <li>(Ad.3,4,5) <a href="/magento/app/code/core/Mage/Core/Block/Text/List.php" class="file">Mage_Core_Block_Text_List</a></li>
        <li>(Ad.3,4,5) <a href="/magento/app/code/core/Mage/Page/Block/Html/Head.php" class="file">Mage_Page_Block_Html_Head</a></li>
        <li><a href="/magento/app/code/core/Mage/Core/Model/Design.php" class="file">Mage_Core_Model_Design</a></li>
        <li><a href="/magento/app/code/core/Mage/Core/Model/Design/Package.php" class="file">Mage_Core_Model_Design_Package</a></li>
      </ul>
    </li>
  </ul>

  <h3>4. Working with Database in Magento - 13% of the exam.</h3>
  <ul class="one">
    <li><h4>Models, resource models, and collections</h4>
      <ul>
        <li>47. <a href="/answers/47.html" class="file">Describe the basic concepts of models, resource models, and collections, and the relationship they have to one another</a></li>
        <li>48. <a href="/answers/48.html" class="file">Configure a database connection</a></li>
        <li>49. Describe how Magento works with database tables</li>
        <li>50. Describe the load-and-save process for a regular entity</li>
        <li>51. Describe group save operations</li>
        <li>52. Describe the role of Zend_Db_Select in Magento</li>
        <li>53. Describe the collection interface (filtering/sorting/grouping)</li>
        <li>54. Describe the hierarchy of database-related classes in Magento</li>
        <li>55. Describe the role and hierarchy of setup objects in Magento</li>
      </ul>
      <h5>Questions</h5>
      <ul>
        <li>Which methods exist to access the table of a resource model?</li>
        <li>Which methods exist to create joins between tables on collections and on select instances?</li>
        <li>How do table name lookups work, and what is the purpose of making table names configurable?</li>
        <li><a href="/answers/4q4.html" class="file">Which events are fired automatically during CRUD operations?</a></li>
        <li>How does Magento figure out if a save() call needs to create an INSERT or an UPDATE query?</li>
        <li>How many ways exist to specify filters on a flat table collection?</li>
        <li>Which methods exist to influence the ordering of the result set for flat table collections? How do the methods differ?</li>
        <li>Why and how does Magento differentiate between setup, read, and write database resources?</li>
      </ul>
      <h5>Reference files</h5>
      <ul>
        <li><a href="/magento/app/code/core/Mage/Core/Model/Abstract.php" class="file">Mage_Core_Model_Abstract</a></li>
        <li><a href="/magento/app/code/core/Mage/Core/Model/Mysql4/Abstract.php" class="file">Mage_Core_Model_Mysql4_Abstract</a></li>
        <li><a href="/magento/app/code/core/Mage/Core/Model/Mysql4/Collection/Abstract.php" class="file">Mage_Core_Model_Mysql4_Collection_Abstract</a></li>
        <li><a href="/magento/app/code/core/Mage/Core/Model/Resource.php" class="file">Mage_Core_Model_Resource::getTableName()</a></li>
        <li><a href="/magento/lib/Zend/Db/Select.php" class="file">Zend_Db_Select</a></li>
      </ul>
    </li>
    <li><h4>Install/upgrade scripts</h4>
      <ul>
        <li>56. Describe the Install/Upgrade Workflow</li>
        <li>57. Write install and upgrade scripts using set-up resources</li>
        <li>58. Identify how to use the DDL class in setup scripts</li>
      </ul>
      <h5>Questions</h5>
      <ul>
        <li>Under which circumstances are setup scripts executed?</li>
        <li>How and where does Magento differentiate between install, upgrade, and downgrade scripts?</li>
        <li>What is the difference between the different classes used to execute setup scripts?</li>
        <li>Which is the base setup class for flat table entities, and which one the base for EAV entities?</li>
        <li>Which methods are generally available in setup scripts to manipulate database tables and indexes?</li>
        <li>What is the difference between addAttribute() and updateAttribute() in EAV setup scripts?</li>
        <li>How can you implement a rollback in Magento?</li>
      </ul>
      <h5>Reference files</h5>
      <ul>
        <li><a href="/magento/app/code/core/Mage/Core/Model/App.php" class="file" id="file46">Mage_Core_Model_App::run() and _initModules()</a></li>
        <li><a href="/magento/app/code/core/Mage/Core/Model/Resource/Setup.php" class="file" id="file47">Mage_Core_Model_Resource_Setup::applyAllUpdates() and applyAllDataUpdates()</a></li>
        <li>Mage_Eav_Model_Entity_Setup::<a href="/magento/app/code/core/Mage/Eav/Model/Entity/Setup.php" class="file" id="file481">addAttribute()</a> and <a href="/magento/app/code/core/Mage/Eav/Model/Entity/Setup.php" class="file" id="file482">updateAttribute()</a></li>
      </ul>
    </li>
  </ul>

  <h3>5- Entity-Attribute-Value (EAV) Model - 10% of the exam.</h3>
  <ul class="one">
    <li><h4>EAV model concepts</h4>
      <ul>
        <li>59. <a href="/answers/59.html" class="file">Define basic EAV concepts and class hierarchy</a></li>
        <li>60. <a href="/answers/60.html" class="file">Describe the database schema for EAV entities</a></li>
        <li>61. <a href="/answers/61.html" class="file">Describe the EAV entity structure and its difference from the standard core resource model</a></li>
        <li>62. Describe the EAV load-and-save process and its differences from the regular load- and-save process</li>
      </ul>
      <h5>Questions</h5>
      <ul>
        <li>This objective covers understanding how EAV entity values are stored in the database, how the involved tables relate, how the EAV resource models differ from the flat table resource models and how the EAV models process CRUD operations.</li>
        <li>Which classes in Mage_Eav are used as resource models and which are used as regular models?</li>
        <li>How do flat and EAV resource models differ?</li>
        <li>Which entities in a native Magento installation use EAV resource models and why?</li>
        <li>What are the advantages and disadvantages of EAV over flat table resource models?</li>
        <li>How are store and website scope attribute values implemented in the Magneto EAV system?</li>
        <li>How does the model distinguish between insert and update operations?</li>
        <li>How do load and save processes for EAV entities differ from those for flat table entities?What parts are identical?</li>
      </ul>
      <h5>Reference files</h5>
      <ul>
        <li><a href="/magento/app/code/core/Mage/Eav/Model/Config.php" class="file">Mage_Eav_Model_Config</a></li>
        <li><a href="/magento/app/code/core/Mage/Eav/Model/Entity/Abstract.php" class="file">Mage_Eav_Model_Entity_Abstract</a></li>
        <li><a href="/magento/app/code/core/Mage/Eav/Model/Entity/Collection/Abstract.php" class="file">Mage_Eav_Model_Entity_Collection_Abstract</a></li>
        <li>Mage_Eav_Model_Entity_Abstract::<a href="/magento/app/code/core/Mage/Eav/Model/Entity/Abstract.php" class="file" id="file541">load()</a> and
          <a href="/magento/app/code/core/Mage/Eav/Model/Entity/Abstract.php" class="file" id="file542">save()</a></li>
        <li>Mage_Core_Model_Abstract::<a href="/magento/app/code/core/Mage/Core/Model/Abstract.php" class="file" id="file551">load()</a> and
          <a href="/magento/app/code/core/Mage/Core/Model/Abstract.php" class="file" id="file552">save()</a></li>
        <li><a href="/magento/app/code/core/Mage/Eav/Model/Entity/Collection/Abstract.php" class="file" id="file56">Mage_Eav_Model_Entity_Collection_Abstract::load()</a></li>
        <li><a href="/magento/app/code/core/Mage/Core/Model/Mysql4/Collection/Abstract.php" class="file" id="file57">Mage_Core_Model_Mysql4_Collection_Abstract::load()</a></li>
      </ul>
    </li>
    <li><h4>Attributes management</h4>
      <ul>
        <li>63. Identify the purpose of attribute frontend, source, and backend models</li>
        <li>64. Describe how to implement the interface of attribute frontend, source, and backend models</li>
        <li>65. Describe how to create and customize attributes</li>
      </ul>
      <h5>Questions</h5>
      <ul>
        <li>(Ad.2) How do attribute models, attribute source models, attribute backend models and attribute frontend models relate to each other?</li>
        <li>(Ad.2) Which methods have to be implemented in a custom source model (or frontend model or backend model)?</li>
        <li>(Ad.2) Can adminhtml system configuration source models also be used for EAV attributes?</li>
        <li>(Ad.2) What is the default frontend model (and source and backend model) for EAV attributes?</li>
        <li>(Ad.2) Does every attribute use a source model?</li>
        <li>(Ad.2) Which classes and methods are related to updating the EAV attribute values in the flat catalog tables? What factors allow for attributes to be added to flat catalog tables?</li>
        <li>(Ad.2) How are store-scoped entity attribute values stored when catalog flat storage is enabled for that entity type?</li>
        <li>(Ad.2) Which frontend, source, and backend models are available in a stock Magento installation?</li>
        <li>(Ad.2) How do multi-lingual options for attributes work in Magento?</li>
        <li>(Ad.2) How do you get a list of all options for an attribute for a specified store view in addition to the admin scope?</li>
        <li>(Ad.3) Besides simply using the stock EAV attributes that come with Magento, one of the most common operations for developers is to modify or create attributes.</li>
        <li>(Ad.3) Which setup methods are available to work with EAV entities?</li>
        <li>(Ad.3) How can an EAV setup class be instantiated in a setup script if not specified in the XML <class> configuration for a setup resource?</li>
        <li>(Ad.3) What is the difference between addAttribute() and updateAttribute()?</li>
        <li>(Ad.3) What are the advantages of using a custom setup class for manipulating EAV attributes in a custom module?</li>
      </ul>
      <h5>Reference files</h5>
      <ul>
        <li>(Ad.2) <a href="/magento/app/code/core/Mage/Eav/Model/Entity/Attribute/Abstract.php" class="file">Mage_Eav_Model_Entity_Attribute_Abstract</a></li>
        <li>(Ad.2) <a href="/magento/app/code/core/Mage/Eav/Model/Entity/Attribute/Backend/Abstract.php" class="file">Mage_Eav_Model_Entity_Attribute_Backend_Abstract</a></li>
        <li>(Ad.2) <a href="/magento/app/code/core/Mage/Eav/Model/Entity/Attribute/Frontend/Abstract.php" class="file">Mage_Eav_Model_Entity_Attribute_Frontend_Abstract</a></li>
        <li>(Ad.2) <a href="/magento/app/code/core/Mage/Eav/Model/Entity/Attribute/Source/Abstract.php" class="file">Mage_Eav_Model_Entity_Attribute_Source_Abstract</a></li>
        <li>(Ad.2) <a href="/magento/app/code/core/Mage/Eav/Model/Entity/Attribute/Source/Table.php" class="file">Mage_Eav_Model_Entity_Attribute_Source_Table</a></li>
        <li>(Ad.2) <a href="/magento/app/code/core/Mage/Eav/Model/Mysql4/Entity/Attribute/Option/Collection.php" class="file" id="file563">Mage_Eav_Model_Mysql4_Entity_Attribute_Option_Collection::load()</a></li>
        <li>(Ad.3) <a href="/magento/app/code/core/Mage/Eav/Model/Entity/Setup.php" class="file">Mage_Eav_Model_Entity_Setup</a></li>
      </ul>
    </li>
  </ul>

  <h3>6. Adminhtml - 7% of the exam.</h3>
  <ul class="one">
    <li><h4>Common structure/architecture</h4>
      <ul>
        <li>66. Describe the similarities and differences between adminhtml and frontend interface and routing</li>
        <li>67. <a href="/answers/67.html" class="file">Describe the components and types of cache clearing using the adminhtml interface</a></li>
      </ul>
      <h5>Questions</h5>
      <ul>
        <li>(Ad.1) Which areas in configuration are only loaded for the admin area?</li>
        <li>(Ad.1) What is the difference between admin and frontend controllers?</li>
        <li>(Ad.1) When does Magento figure out which area to use on the current page?</li>
        <li>(Ad.1) How you can make your controller work under the /admin route?</li>
        <li>(Ad.2) At which moment does Magento check if a user is logged in or not</li>
        <li>(Ad.2) Which class do most Magento adminhtml blocks extend</li>
        <li>(Ad.2) What are the roles of adminhtml config</li>
        <li>(Ad.2) What are the differences between the different cache types on the admin cache cleaning page</li>
        <li>(Ad.2) What is the difference between “Flush storage” and “Flush Magento Cache”</li>
        <li>(Ad.2) How you can clear the cache without using the UI</li>
      </ul>
      <h5>Reference files</h5>
      <ul>
        <li>(Ad.1) <a href="/magento/app/code/core/Mage/Adminhtml/Controller/Action.php" class="file">Mage_Adminhtml_Controller_Action</a></li>
        <li>(Ad.1) <a href="/magento/app/code/core/Mage/Core/Model/Layout.php" class="file">Mage_Core_Model_Layout</a></li>
        <li>(Ad.1) <a href="/magento/app/code/core/Mage/Core/Model/Layout/Update.php" class="file">Mage_Core_Model_Layout_Update</a></li>
        <li>(Ad.1) <a href="/magento/app/code/core/Mage/Core/Controller/Varien/Router/Standard.php" class="file">Mage_Core_Controller_Varien_Router_Standard</a></li>
        <li>(Ad.2) <a href="/magento/app/code/core/Mage/Adminhtml/Model/Config.php" class="file">Mage_Adminhtml_Model_Config</a></li>
        <li>(Ad.2) <a href="/magento/app/code/core/Mage/Adminhtml/Model/Config/Data.php" class="file">Mage_Adminhtml_Model_Config_Data</a></li>
        <li>(Ad.2) <a href="/magento/app/code/core/Mage/Admin/Model/Observer.php" class="file">Mage_Admin_Model_Observer</a></li>
        <li>(Ad.2) <a href="/magento/app/code/core/Mage/Core/Model/Cache.php" class="file">Mage_Core_Model_Cache</a></li>
      </ul>
    </li>
    <li><h4>Forms in Magento</h4>
      <ul>
        <li>68. Define form structure, form templates, grids in Magento, and grid containers and elements</li>
      </ul>
      <h5>Questions</h5>
      <ul>
        <li>Which block does a standard Magento form extend?</li>
        <li>What is the default template for a Magento form?</li>
        <li>Describe the role of a form container and its template.</li>
        <li>Describe the concept of Form elements, and list system elements implemented in Magento.</li>
        <li>Describe the concept of Fieldsets.</li>
        <li>How can you render an element with a custom template?</li>
      </ul>
      <h5>Reference files</h5>
      <ul>
        <li><a href="/magento/lib/Varien/Data/Form/" class="file">lib/Varien/Data/Form/*</li>
        <li><a href="/magento/app/code/core/Mage/Adminhtml/Block/Widget/Form.php" class="file">Mage_Adminhtml_Block_Widget_Form</a></li>
        <li><a href="/magento/app/code/core/Mage/Adminhtml/Block/Widget/Form/Container.php" class="file">Mage_Adminhtml_Block_Widget_Form_Container</a></li>
      </ul>
    </li>
    <li><h4>Grids in Magento</h4>
      <ul>
        <li>69. Create a simple form and grid for a custom entity</li>
        <li>70. Describe how to implement advanced Adminhtml Grids and Forms, including editable cells, mass actions, totals, reports, custom filters and renderers, multiple grids on one page, combining grids with forms, and adding custom javascript to an admin form</li>
      </ul>
      <h5>Questions</h5>
      <ul>
        <li>Which block class do Magento grid classes typically extend</li>
        <li>What is the default template for Magento grid instances</li>
        <li>How can grid filters be customized</li>
        <li>How does Magento actually perform sorting/paging/filtering operations</li>
        <li>What protected methods are specific to adminhtml grids, and how are they used</li>
        <li>What is the standard column class in a grid, and what is its role</li>
        <li>What are column renderers used for in Magento</li>
        <li>How can javascript used for a Magento grid be customized</li>
        <li>What is the role of the grid container class and its template</li>
        <li>What is the programmatic structure of mass actions</li>
      </ul>
      <h5>Reference files</h5>
      <ul>
        <li><a href="/magento/app/code/core/Mage/Adminhtml/Block/Widget/Grid.php" class="file">Mage_Adminhtml_Block_Widget_Grid</a></li>
        <li><a href="/magento/app/code/core/Mage/Adminhtml/Block/Widget/Grid/Column.php" class="file">Mage_Adminhtml_Block_Widget_Grid_Column</a></li>
        <li><a href="/magento/app/code/core/Mage/Adminhtml/Block/Widget/Grid/Column/Renderer/" class="file">Mage_Adminhtml_Block_Widget_Grid_Column_Renderer/*</a></li>
        <li><a href="/magento/app/code/core/Mage/Adminhtml/Block/Widget/Grid/Column/Filter/" class="file">Mage_Adminhtml_Block_Widget_Grid_Column_Filter/*</a></li>
        <li><a href="/magento/app/code/core/Mage/Adminhtml/Block/Widget/Grid/Container.php" class="file">Mage_Adminhtml_Block_Widget_Grid_Container</a></li>
        <li><a href="/magento/app/design/adminhtml/default/default/template/sales/widget/grid/" class="file">app/design/adminhtml/default/default/template/sales/widget/grid.phtml</a></li>
        <li><a href="/magento/app/design/adminhtml/default/default/template/sales/widget/grid/" class="file">app/design/adminhtml/default/default/template/sales/widget/grid/container.phtml</a></li>
      </ul>
    </li>
    <li><h4>System configuration</h4>
      <ul>
        <li>71. Define the basic terms, elements, and structure of system configuration XML</li>
        <li>72. Describe system configuration scopes</li>
      </ul>
      <h5>Questions</h5>
      <ul>
        <li>(Ad.1) How can elements in system configuration be rendered with a custom template</li>
        <li>(Ad.1) How does the structure of system.xml relate to the rendered elements in the System Configuration view</li>
        <li>(Ad.1) How can the CSS class of system configuration elements be changed</li>
        <li>(Ad.1) What is the syntax for specifying the options in dropdowns and multiselects</li>
        <li>(Ad.1) Which classes are used to parse and render system configuration XML</li>
        <li>(Ad.1) What is the syntax to specify a custom renderer for a field in system configuration</li>
        <li>(Ad.1) How does Magento store data for system configuration</li>
        <li>(Ad.1) What is the difference between Mage::getStoreConfig(...) and Mage::getConfig()->getNode(...)?
        <li>(Ad.2) How do different scopes (global, website, store) work in Magento system configuration?</li>
        <li>(Ad.2) How does Magento store information about option values and their scopes?</li>
      </ul>
      <h5>Reference files</h5>
      <ul>
        <li>(Ad.1) <a href="/magento/app/code/core/Mage/Adminhtml/Model/" class="file">Mage/Adminhtml/Model/System/Config/*</a></li>
        <li>(Ad.1) <a href="/magento/app/code/core/Mage/Adminhtml/Block/" class="file">Mage/Adminhtml/Block/System/Config/*</a></li>
        <li>(Ad.2) core_config_data table</li>
        <li>(Ad.2) <a href="/magento/app/code/core/Mage/Core/Model/Config/Data.php" class="file">Mage_Core_Model_Core_Config_Data?</a></li>
        <li>(Ad.2) <a href="/magento/app/code/core/Mage/Core/Model/Mysql4/Config/Data.php" class="file">Mage_Core_Model_Mysql4_Config_Data</a></li>
        <li>(Ad.2) <a href="/magento/app/code/core/Mage/Core/Model/Mysql4/Config/Data/Collection.php" class="file">Mage_Core_Model_Mysql4_Config_Data_Collection</a></li>
      </ul>
    </li>
    <li><h4>Access Control Lists (ACL) and permissions in Magento</h4>
      <ul>
        <li>73. Define/identify basic terms and elements of ACL</li>
        <li>74. Use ACL to:
          <ul>
            <li>1. Set up a menu item</li>
            <li>2. Create appropriate permissions for users</li>
            <li>3. Check for permissions in permissions management tree structures</li>
          </ul>
        </li>
      </ul>
      <h5>Questions</h5>
      <ul>
        <li>For what purpose is the _isAllowed() method used and which class types implement it</li>
        <li>What is the XML syntax for adding new menu element</li>
        <li>What is adminhtml.xml used for? Which class parses it, and which class applies it</li>
        <li>Where is the code located that processes the ACL XML and where is the code that applies it</li>
        <li>What is the relationship between Magento and Zend_Acl</li>
        <li>How is ACL information stored in the database</li>
      </ul>
      <h5>Reference files</h5>
      <ul>
        <li><a href="/magento/app/code/core/Mage/Admin/Model/Acl.php" class="file">Admin_Model_Acl</a></li>
        <li><a href="/magento/app/code/core/Mage/Admin/Model/Acl/Resource.php" class="file">Admin_Model_Acl_Resource</a></li>
        <li><a href="/magento/app/code/core/Mage/Admin/Model/Acl/Role.php" class="file">Admin_Model_Acl_Role</a></li>
        <li><a href="/magento/app/code/core/Mage/Admin/Model/Mysql4/Acl.php" class="file">Admin_Model_Mysql4_Acl</a></li>
        <li><a href="/magento/app/code/core/Mage/Admin/Model/Mysql4/Role.php" class="file">Admin_Model_Mysql4_Role</a></li>
        <li><a href="/magento/app/code/core/Mage/Admin/Model/Mysql4/Roles.php" class="file">Admin_Model_Mysql4_Roles</a></li>
        <li><a href="/magento/app/code/core/Mage/Admin/Model/Mysql4/Rules.php" class="file">Admin_Model_Mysql4_Rules</a></li>
      </ul>
    </li>
    <li><h4>Working with extensions in Magento</h4>
      <ul>
        <li>75. Describe how to enable and configure extensions</li>
        <li>76. Define Magento extensions and describe the different types of extension available (Community, Core, Commercial)</li>
      </ul>
      <h5>Questions</h5>
      <ul>
        <li>In which folders are Magento extensions files located</li>
        <li>Which files are necessary to make custom modules work</li>
        <li>How can module dependencies be manipulated</li>
        <li>What is the role of the downloader</li>
        <li>How can modules be installed through Magento Connect</li>
      </ul>
    </li>
  </ul>

  <h3>7- Catalog - 10% of the exam.</h3>
  <ul class="one">
    <li><h4>Product Types</h4>
      <ul>
        <li>77. Identify and describe standard product types (simple, configurable, bundled, etc.)</li>
        <li>78. Create custom product types from scratch or modify existing product types</li>
        <li>79. Identify how custom product types interact with indexing, SQL, and underlying data structures.</li>
      </ul>
      <h5>Questions</h5>
      <ul>
        <li>Which product types exist in Magento</li>
        <li><a href="/answers/7q2.html" class="file">Which product types are implemented as part of the Mage_Catalog module, and which are not</a></li>
        <li>What steps need to be taken in order to implement a custom product type</li>
        <li>How do the different product types handle price calculation</li>
        <li>Which indexing processes does the product type influence</li>
        <li>Which product types implement a parent-child relationship between product entities</li>
        <li>Which database tables are shared between product types, and which ones are specific to one product type</li>
      </ul>
      <h5>Reference files</h5>
      <ul>
        <li><a href="/magento/app/code/core/Mage/Catalog/Model/Product/Type.php" class="file">Mage_Catalog_Model_Product_Type</a></li>
        <li><a href="/magento/app/code/core/Mage/Catalog/Model/Product/Type/Abstract.php" class="file">Mage_Catalog_Model_Product_Type_Abstract</a></li>
        <li><a href="/magento/app/code/core/Mage/Catalog/Model/Product/Type/Simple.php" class="file">Mage_Catalog_Model_Product_Type_Simple</a></li>
        <li><a href="/magento/app/code/core/Mage/Catalog/Model/Resource/Eav/Mysql4/Product/Type/Configurable.php" class="file">Mage_Catalog_Model_Resource_Eav_Mysql4_Product_Type_Configurable</a></li>
        <li><a href="/magento/app/code/core/Mage/Bundle/Model/Product/Type.php" class="file">Mage_Bundle_Model_Product_Type</a></li>
      </ul>
    </li>
    <li><h4>Price Generation</h4>
      <ul>
        <li>80. Identify basic concepts of price generation in Magento</li>
        <li>81. Modify and adjust price generation for products (for example, during integration of third-party software)</li>
      </ul>
      <h5>Questions</h5>
      <ul>
        <li>Under what circumstances are product prices read from the index tables?</li>
        <li>From which modules do classes participate in price calculation?</li>
        <li>Which ways exist to specify custom prices during runtime?</li>
        <li>How do custom product options influence price calculation?</li>
        <li>How are product tier prices implemented and displayed?</li>
      </ul>
      <h5>Reference files</h5>
      <ul>
        <li>Mage_Catalog_Model_Product::<a href="/magento/app/code/core/Mage/Catalog/Model/Product.php" class="file" id="file761">getPrice()</a> and <a href="/magento/app/code/core/Mage/Catalog/Model/Product.php" class="file" id="file762">getFinalPrice()</a></li>
        <li><a href="/magento/app/code/core/Mage/Catalog/Model/Product/Type/Price.php" class="file" id="file77">Mage_Catalog_Model_Product_Type_Price ::getTierPrice()</a></li>
        <li><a href="/magento/app/code/core/Mage/Catalog/Model/Product/Indexer/Price.php" class="file">Mage_Catalog_Model_Product_Indexer_Price</a></li>
        <li><a href="/magento/app/code/core/Mage/Catalog/Model/Product/Type/Configurable/Price.php" class="file">Mage_Catalog_Model_Product_Type_Configurable_Price</a></li>
      </ul>
    </li>
    <li><h4>Category Structure</h4>
      <ul>
        <li>82. Describe the Category Hierarchy Tree Structure implementation (the internal structure inside the database), including:
          <ul>
            <li>1. the meaning of parent_id 0</li>
            <li>2. the construction of paths</li>
            <li>3. the attributes required to display a new category in the store</li>
          </ul>
        </li>
      </ul>
      <h5>Questions</h5>
      <ul>
        <li><a href="/answers/7q13.html" class="file">How is the category hierarchy reflected in the database? Does it differ when multiple root categories are present?</a></li>
        <li>How is a catalog tree read from the database tables, with and without flat catalog tables enabled?</li>
        <li>How does working with categories differ if the flat catalog is enabled on a model level?</li>
        <li>How is the category parent id path set on new categories?</li>
        <li>Which methods exist to read category children and how do they differ?</li>
      </ul>
      <h5>Reference files</h5>
      <ul>
        <li><a href="/magento/app/code/core/Mage/Catalog/Model/Category.php" class="file">Mage_Catalog_Model_Category</a></li>
        <li><a href="/magento/app/code/core/Mage/Catalog/Model/Resource/Eav/Mysql4/Category.php" class="file">Mage_Catalog_Model_Resource_Eav_Mysql4_Category</a></li>
        <li><a href="/magento/app/code/core/Mage/Catalog/Model/Resource/Eav/Mysql4/Category/Collection.php" class="file">Mage_Catalog_Model_Resource_Eav_Mysql4_Category_Collection</a></li>
        <li><a href="/magento/app/code/core/Mage/Catalog/Model/Resource/Eav/Mysql4/Category/Tree.php" class="file">Mage_Catalog_Model_Resource_Eav_Mysql4_Category_Tree</a></li>
      </ul>
    </li>
    <li><h4>Catalog Price Rules</h4>
      <ul>
        <li>83. Identify how catalog price rules are implemented in Magento</li>
      </ul>
      <h5>Questions</h5>
      <ul>
        <li>How are the catalog price rules related to the product prices?</li>
        <li>How are the catalog price rules stored in the database?</li>
      </ul>
      <h5>Reference files</h5>
      <ul>
        <li><a href="/magento/app/code/core/Mage/CatalogRule/Model/Rule.php" class="file">Mage_CatalogRule_Model_Rule</a></li>
        <li><a href="/magento/app/code/core/Mage/CatalogRule/Model/Observer.php" class="file">Mage_CatalogRule_Model_Observer</a></li>
        <li><a href="/magento/app/code/core/Mage/CatalogRule/Model/Rule/Product/Price.php" class="file">Mage_CatalogRule_Model_Rule_Product_Price</a></li>
      </ul>
    </li>
    <li><h4>Other Skills</h4>
      <ul>
        <li>84. Choose optimal catalog structure (EAV vs. Flat) for a given implementation</li>
        <li>85. Implement, troubleshoot, and modify Magento tax rules</li>
        <li>86. Modify, extend, and trou</li>
        <li>87. Troubleshoot and customize Magento indexes</li>
        <li>88. Describe custom product options in Magento</li>
      </ul>
      <h5>Questions</h5>
      <ul>
        <li>When and how are the catalog flat tables updated when a product is modified?</li>
        <li>Which factors are used by the Mage_Tax module to apply the correct tax rate (or rates) to a product price?</li>
        <li>How can attributes with custom source models be integrated into layered navigation filtering?</li>
        <li>Which classes are responsible for rendering the layered navigation?</li>
        <li>Which indexes are used for the layered navigation?</li>
        <li>Which steps are needed to integrate a custom indexer into the framework offered by the Mage_Index module?</li>
        <li>How are custom product options stored on quote and order items?</li>
        <li>How can you specify custom product options on-the-fly on quote items?</li>
        <li>How are custom product options copied from quote to order items?</li>
        <li>How are custom product options processed when a product is added to the cart?</li>
      </ul>
      <h5>Reference files</h5>
      <ul>
        <li><a href="/magento/app/code/core/Mage/Catalog/Model/Product/Indexer/Flat.php" class="file">Mage_Catalog_Model_Product_Indexer_Flat</a></li>
        <li><a href="/magento/app/code/core/Mage/Catalog/Model/Category/Indexer/Flat.php" class="file">Mage_Catalog_Model_Category_Indexer_Flat</a></li>
        <li><a href="/magento/app/code/core/Mage/Catalog/Model/Product/Indexer/Eav.php" class="file">Mage_Catalog_Model_Product_Indexer_Eav</a></li>
        <li><a href="/magento/app/code/core/Mage/Catalog/Model/Resource/Eav/Mysql4/Product/Indexer/Eav.php" class="file">Mage_Catalog_Model_Resource_Eav_Mysql4_Product_Indexer_Eav</a></li>
        <li><a href="/magento/app/code/core/Mage/Tax/Helper/Data.php" class="file" id="file721">Mage_Tax_Helper_Data::getPrice()</a></li>
        <li><a href="/magento/app/code/core/Mage/Catalog/Block/Layer/State.php" class="file">Mage_Catalog_Block_Layer_State</a></li>
        <li><a href="/magento/app/code/core/Mage/Catalog/Block/Layer/View.php" class="file">Mage_Catalog_Block_Layer_View</a></li>
        <li><a href="/magento/app/code/core/Mage/Catalog/Model/Layer.php" class="file">Mage_Catalog_Model_Layer</a></li>
      </ul>
    </li>
  </ul>

  <h3>8- Checkout - 16% of the exam.</h3>
  <ul class="one">
    <li><h4>Checkout components</h4>
      <ul>
        <li>89. Describe how to modify and effectively customize the quote object, the quote item object, and the address object</li>
        <li>90. Explain the database schema for total models</li>
      </ul>
      <h5>Questions</h5>
      <ul>
        <li>(Ad.1) What is the quote model used for in Magento?</li>
        <li>(Ad.1) What is the shopping cart model used for in Magento?</li>
        <li>(Ad.1) How does Magento store information about the shopping cart?</li>
        <li>(Ad.1) How are different product types processed when added to the cart?</li>
        <li>(Ad.1) What is the difference between shipping and billing address objects in Magento? How is each used in the quote object?</li>
        <li>(Ad.1) What is the difference in processing quote items for onepage and multishipping checkout in Magento?</li>
        <li>(Ad.1) How does Magento process additional information about products being added to the shopping cart (custom options, components of configurable products, etc.)?</li>
        <li>(Ad.1) How do products in the shopping cart affect the checkout process?</li>
        <li>(Ad.1) How can the billing and shipping addresses affect the checkout process?</li>
        <li>(Ad.1) When exactly does inventory decrementing occur?</li>
        <li>(Ad.1) When exactly does card authorization and capturing occur?</li>
        <li>(Ad.2) What are total models responsible for in Magento</li>
        <li>(Ad.2) How you can customize total models</li>
        <li>(Ad.2) How can the individual total models be identified for a given checkout process</li>
        <li>(Ad.2) How can the priority of total model execution be customized</li>
        <li>(Ad.2) To which objects do total models have access in Magento, and which objects do they usually manipulate</li>
        <li>(Ad.2) Which class runs total models processing</li>
        <li>(Ad.2) What is the flow of total model execution</li>
        <li>(Ad.2) At which moment(s) are total models executed
      </ul>
      <h5>Reference files</h5>
      <ul>
        <li>(Ad.1) <a href="/magento/app/code/core/Mage/Sales/Model/Quote.php" class="file">Mage_Sales_Model_Quote</a></li>
        <li>(Ad.1,2) <a href="/magento/app/code/core/Mage/Sales/Model/Quote/Address.php" class="file">Mage_Sales_Model_Quote_Address</a></li>
        <li>(Ad.1) <a href="/magento/app/code/core/Mage/Sales/Model/Quote/Item.php" class="file">Mage_Sales_Model_Quote_Item</a></li>
        <li>(Ad.1,2) <a href="/magento/app/code/core/Mage/Sales/Model/Quote/Address/Item.php" class="file">Mage_Sales_Model_Quote_Address_Item</a></li>
        <li>(Ad.1) <a href="/magento/app/code/core/Mage/CatalogInventory/etc/config.php" class="file">Mage_CatalogInventory/etc/config.xml</a></li>
        <li>(Ad.1) <a href="/magento/app/code/core/Mage/CatalogInventory/Model/Observer.php" class="file">Mage_CatalogInventory_Model_Observer</a></li>
        <li>(Ad.2) <a href="/magento/app/code/core/Mage/Sales/etc/config.php" class="file">Mage/Sales/etc/config.xml</a></li>
        <li>(Ad.2) <a href="/magento/app/code/core/Mage/Tax/etc/config.php" class="file">Mage/Tax/etc/config.xml</a></li>
        <li>(Ad.2) <a href="/magento/app/code/core/Mage/Sales/Model/Quote/Address/Total/Abstract.php" class="file">Mage_Sales_Model_Quote_Address_Total_Abstract</a></li>
        <li>(Ad.2) <a href="/magento/app/code/core/Mage/Sales/Model/Quote/Address/Total/Collector.php" class="file">Mage_Sales_Model_Quote_Address_Total_Collector</a></li>
        <li>(Ad.2) <a href="/magento/app/code/core/Mage/Sales/Model/Quote/Address/Total/" class="file">Mage/Sales/Model/Quote/Address/Total/*</a></li>
        <li>(Ad.2) <a href="/magento/app/code/core/Mage/SalesRule/etc/config.php" class="file">Mage/SalesRule/etc/config.xml</a></li>
        <li>(Ad.2) <a href="/magento/app/code/core/Mage/SalesRule/Model/Validator.php" class="file">Mage_SalesRule_Model_Validator</a></li>
      </ul>
    </li>
    <li><h4>Shopping Cart price rules</h4>
      <ul>
        <li>91. Describe how shopping cart price rules work and how they can be customized</li>
      </ul>
      <h5>Questions</h5>
      <ul>
        <li>Which module is responsible for shopping cart price rules?</li>
        <li>What is the difference between shopping cart and catalog price rules?</li>
        <li>What are the limitations of Magento shopping cart rules?</li>
      </ul>
      <h5>Reference files</h5>
      <ul>
        <li><a href="/magento/app/code/core/Mage/Sales/etc/config.php" class="file">Mage/SalesRule/etc/config.xml</a></li>
        <li><a href="/magento/app/code/core/Mage/SalesRule/Model/" class="file">Mage/SalesRule/Model/*</a></li>
      </ul>
    </li>
    <li><h4>Shipping and payment methods in Magento</h4>
      <ul>
        <li>92. Describe the programmatic structure of shipping methods, how to customize existing methods, and how to implement new methods</li>
        <li>93. Describe the shipping rates calculation process</li>
        <li>94. Describe the programmatic structure of payment methods and how to implement new methods</li>
      </ul>
      <h5>Questions</h5>
      <ul>
        <li>How does Magento calculate shipping rates?</li>
        <li>What is the hierarchy of shipping information in Magento?</li>
        <li>How does the TableRate shipping method work?</li>
        <li>How do US shipping methods (FedEX, UPS, USPS) work?</li>
        <li>(Ad.3) How can payment method behavior be customized (for example: whether to charge or authorize a credit card; controlling URL redirects; etc.)?</li>
        <li>(Ad.3) Which class is the basic class in the payment method hierarchy?</li>
        <li>(Ad.3) How can the stored data of payment methods be customized (credit card numbers, for example)?</li>
        <li>(Ad.3) What is the difference between payment method and payment classes (such as order_payment, quote_payment, etc.)?</li>
        <li>(Ad.3) What is the typical structure of the payment method module?</li>
      </ul>
      <h5>Reference files</h5>
      <ul>
        <li><a href="/magento/app/code/core/Mage/Shipping/Model/Carrier/Abstract.php" class="file">Mage_Shipping_Model_Carrier_Abstract</a></li>
        <li><a href="/magento/app/code/core/Mage/Shipping/Model/Rate/Abstract.php" class="file">Mage_Shipping_Model_Rate_Abstract</a></li>
        <li><a href="/magento/app/code/core/Mage/Shipping/Model/Rate/Request.php" class="file">Mage_Shipping_Model_Rate_Request</a></li>
        <li><a href="/magento/app/code/core/Mage/Shipping/Model/Rate/Result.php" class="file">Mage_Shipping_Model_Rate_Result</a></li>
        <li><a href="/magento/app/code/core/Mage/Shipping/Model/Rate/Result/" class="file">Mage/Shipping/Model/Rate/Result/*</a></li>
        <li><a href="/magento/app/code/core/Mage/Shipping/Model/Info.php" class="file">Mage_Shipping_Model_Info</a></li>
        <li><a href="/magento/app/code/core/Mage/Shipping/Model/Carrier/" class="file">Mage_Shipping_Model_Carrier/*</a></li>
        <li><a href="/magento/app/code/core/Mage/Shipping/Model/Mysql4/Carrier/" class="file">Mage/Shipping/Model/Mysql4/Carrier/*</a></li>
        <li>(Ad.3) <a href="/magento/app/code/core/Mage/Payment/Model/Method/Abstract.php" class="file">Mage_Payment_Model_Method_Abstract</a></li>
        <li>(Ad.3) <a href="/magento/app/code/core/Mage/Payment/Model/Method/Cc.php" class="file">Mage_Payment_Model_Method_Cc</a></li>
        <li>(Ad.3) <a href="/magento/app/code/core/Mage/Payment/Model/Info.php" class="file">Mage_Payment_Model_Info</a></li>
        <li>(Ad.3) <a href="/magento/app/code/core/Mage/Paypal/" class="file">Mage/Paypal/*</a></li>
        <li>(Ad.3) <a href="/magento/app/code/core/Mage/PaypalUk/" class="file">Mage/PaypalUk/*</a></li>
      </ul>
    </li>
    <li><h4>Magento multishipping implementation</h4>
      <ul>
        <li>95. Describe how to extend the Magento multishipping implementation</li>
        <li>96. Identify limitations of the multishipping implementation</li>
      </ul>
      <h5>Questions</h5>
      <ul>
        <li>How does the storage of quotes for multishipping and onepage checkouts differ</li>
        <li>Which quotes in a multishipping checkout flow will be virtual</li>
        <li>What is the difference in the multishipping processing for a quote with virtual products in it</li>
        <li>How can different product types be split among multiple addresses when using multishipping in Magento</li>
        <li>How many times are total models executed on a multishipping checkout in Magento</li>
        <li>Which model is responsible for multishipping checkout in Magento</li>
      </ul>
      <h5>Reference files</h5>
      <ul>
        <li><a href="/magento/app/code/core/Mage/Checkout/Model/Type/Multishipping.php" class="file">Mage_Checkout_Model_Type_Multishipping</a></li>
        <li><a href="/magento/app/code/core/Mage/Sales/Model/Quote/Address.php" class="file">Mage_Sales_Model_Quote_Address</a></li>
        <li><a href="/magento/app/code/core/Mage/Sales/Model/Quote.php" class="file">Mage_Sales_Model_Quote</a></li>
      </ul>
    </li>
  </ul>

  <h3>9- Sales and Customers - 11% of the exam.</h3>
  <ul class="one">
    <li><h4>Sales</h4>
      <ul>
        <li>97. Describe order creation in the admin</li>
        <li>98. Describe the differences in order creation between the frontend and the admin</li>
        <li>99. Card operations (capturing and authorization)</li>
        <li>100.  Describe the order shipment structure and process</li>
        <li>101.  Describe the architecture and processing of refunds</li>
        <li>102.  Describe the implementation of the three partial order operations (partial invoice, partial shipping, and partial refund)?</li>
        <li>103.  Describe cancel operations</li>
      </ul>
      <h5>Questions</h5>
      <ul>
        <li>Which classes are involved in order creation in the admin? What are their roles (especially the role of adminhtml classes)</li>
        <li>How does Magento calculate price when an order is created from the admin</li>
        <li>Which steps are necessary in order to create an order from the admin</li>
        <li>What happens when existing orders are edited in the admin</li>
        <li>What is the difference between order status and order state</li>
        <li>(Ad.99) Which classes and methods are responsible for credit card operations (for example authorization or capturing)</li>
        <li>(Ad.99) What is the difference between
        <li>(Ad.99) What are the roles of the order, order_payment, invoice, and payment methods in the process of charging a card</li>
        <li>(Ad.99) What are the roles of the total models in the context of the invoice object</li>
        <li>(Ad.99) How does Magento store information about invoices</li>
        <li>(Ad.100) How shipment templates be customized?</li>
        <li>(Ad.100) How can different items from a single order be shipped to multiple addresses? Is it possible at all?</li>
        <li>(Ad.100) How does Magento store shipping and tracking information?</li>
        <li>(Ad.101) Which classes are involved, and which tables are used to store refund information?</li>
        <li>(Ad.101) How does Magento process taxes when refunding an order?</li>
        <li>(Ad.101) How does Magento process shipping fees when refunding an order?</li>
        <li>(Ad.101) What is the difference between online and offline refunding?</li>
        <li>(Ad.101) What is the role of the credit memo total models in Magento?</li>
        <li>(Ad.102) How do partial order operations affect order state?</li>
        <li>(Ad.102) How is data for partial operations stored?</li>
        <li>(Ad.103) What cancel operations are available for the various order entities in Magento (order, order item, shipment, invoice, credit memo)? Do all of them support cancellation?</li>
        <li>(Ad.103) How are taxes processed during cancel operations?</li>
      </ul>
      <h5>Reference files</h5>
      <ul>
        <li><a href="/magento/app/code/core/Mage/Sales/Model/Order.php" class="file">Mage_Sales_Model_Order</a></li>
        <li><a href="/magento/app/code/core/Mage/Sales/Model/Order/Address.php" class="file">Mage_Sales_Model_Order_Address</a></li>
        <li><a href="/magento/app/code/core/Mage/Adminhtml/controllers/Sales/Order/CreateController.php" class="file">Mage_Adminhtml_controllers_Order_CreateController</a></li>
        <li><a href="/magento/app/code/core/Mage/Adminhtml/Model/Sales/Order/Create.php" class="file">Mage_Adminhtml_Model_Sales_Order_Create</a></li>
        <li>(Ad.99,102,103) <a href="/magento/app/code/core/Mage/Sales/Model/Order/Invoice.php" class="file">Mage_Sales_Model_Order_Invoice</a></li>
        <li>(Ad.99) <a href="/magento/app/code/core/Mage/Sales/Model/Order/Invoice/" class="file">Mage/Sales/Model/Order/Invoice/*</a></li>
        <li>(Ad.99,102,103) <a href="/magento/app/code/core/Mage/Sales/Model/Order/Payment.php" class="file">Mage_Sales_Model_Order_Payment</a></li>
        <li>(Ad.99) <a href="/magento/app/code/core/Mage/Payment/Model/Info.php" class="file">Mage_Payment_Model_Method_Info (or Mage_Payment_Model_Info ?)</a></li>
        <li>(Ad.99,102) <a href="/magento/app/code/core/Mage/Payment/Model/Method/Abstract.php" class="file">Mage_Payment_Model_Method_Abstract</a></li>
        <li>(Ad.100,102,103) <a href="/magento/app/code/core/Mage/Sales/Model/Order/Shipment.php" class="file">Mage_Sales_Model_Order_Shipment</a></li>
        <li>(Ad.100) <a href="/magento/app/code/core/Mage/Sales/Model/Order/Shipment/" class="file">Mage/Sales/Model/Order/Shipment/*</a></li>
        <li>(Ad.101,102,103) <a href="/magento/app/code/core/Mage/Sales/Model/Order/Creditmemo.php" class="file">Mage_Sales_Model_Order_Creditmemo</a></li>
        <li>(Ad.101) <a href="/magento/app/code/core/Mage/Sales/Model/Order/Creditmemo/" class="file">Mage_Sales_Model_Order_Creditmemo/*</a></li>
        <li>(Ad.103) <a href="/magento/app/code/core/Mage/Adminhtml/controllers/Sales/OrderController.php" class="file">Mage_Adminhtml_Sales_OrderController</a></li>
      </ul>
    </li>
    <li><h4>Customer</h4>
      <ul>
        <li>104.  Describe the architecture of the customer module</li>
        <li>105.  Describe the role of customer addresses</li>
        <li>106.  Describe how to add, modify, and display customer attributes</li>
      </ul>
      <h5>Questions</h5>
      <ul>
        <li>What is the structure of tables in which customer information is stored?</li>
        <li>What is the customer resource model?</li>
        <li>How is customer information validated?</li>
        <li>How can customer-related email templates be manipulated?</li>
        <li>What is the difference between shipping and billing addresses for a customer?</li>
        <li>How does the number of shipping and billing address entities affect the frontend interface for customers?</li>
        <li>How does customer information affect prices and taxes?</li>
        <li>How can attributes be added to a customer address? How are custom address attributes you converted to an order address?</li>
        <li>Can a customer be added to two customer groups at the same time?</li>
      </ul>
      <h5>Reference files</h5>
      <ul>
        <li><a href="/magento/app/code/core/Mage/Customer/etc/config.php" class="file">Mage/Customer/etc/config.xml</a></li>
        <li><a href="/magento/app/code/core/Mage/Customer/Model/Customer.php" class="file">Mage_Customer_Model_Customer</a></li>
        <li><a href="/magento/app/code/core/Mage/Customer/Model/Entity/Customer.php" class="file">Mage_Customer_Model_Entity_Customer</a></li>
        <li>Mage_Customer_Model_Customer_Address (or rather <a href="/magento/app/code/core/Mage/Customer/Model/Address.php" class="file">Mage_Customer_Model_Address</a>)</li>
      </ul>
    </li>
  </ul>

  <h3>10- Advanced features - 13% of the exam.</h3>
  <ul class="one">
    <li><h4>Widgets</h4>
      This topic comprises approximately 13% of the exam. Items are drawn randomly from the following topics and objectives:
      <ul>
        <li>107.  Create frontend widgets and describe widget architecture</li>
      </ul>
      <h5>Questions</h5>
      <ul>
        <li>What classes are typically involved in Magento widget architecture?</li>
        <li>How are admin-configurable parameters and their options specified?</li>
      </ul>
      <h5>Reference files</h5>
      <ul>
        <li><a href="/magento/app/code/core/Mage/Widget/Model/Widget.php" class="file">Mage_Widget_Model_Widget</a></li>
      </ul>
    </li>
    <li><h4>API</h4>
      <ul>
        <li>108.  Use the Magento API to implement third party integrations</li>
        <li>109.  Extend the existing Magento API to allow for deeper integrations into third party products</li>
        <li>110.  Describe the different Web Service APIs available within the Magento Core</li>
        <li>111.  Describe the advantages and disadvantages of the available Web Service APIs in Magento</li>
        <li>112.  Identify the configuration files used for the v2 SOAP API</li>
        <li>113.  Describe the purpose of the configuration files related to the API</li>
      </ul>
      <h5>Questions</h5>
      <ul>
        <li>What are the syntactical differences between API versions?</li>
        <li>How is the final WSDL composed? How can it be customized?</li>
        <li>How are existing methods overwritten? How can additional methods be added?</li>
      </ul>
      <h5>Reference files</h5>
      <ul>
        <li><a href="/magento/app/code/core/Mage/Api/Model/Wsdl/Config.php" class="file">Mage_Api_Model_Wsdl_Config</a></li>
        <li><a href="/magento/app/code/core/Mage/Api/Model/Server.php" class="file">Mage_Api_Model_Server</a></li>
      </ul>
    </li>
    <li><h4>Other Skills</h4>
      <ul>
        <li>114.  Integrate Google features (Google Wallet, Checkout, Adwords, Analytics) into Magento implementation</li>
      </ul>
    </li>
  </ul>

  <h3>11- Enterprise Edition - 9% of the exam.</h3>
  <ul class="one">
    <li>115. Describe how to customize, extend, and troubleshoot Enterprise Edition catalog target rules</li>
      <h5>Questions</h5>
      <ul>
        <li>What additional possibilities does the Enterprise target rule module provide over the Mage_CatalogRule?</li>
        <li>How does the module store the rules in the database?</li>
        <li>Which indexer processes the rules, and how is the index used to realize faster reads?</li>
      </ul>
      <h5>Reference files</h5>
      <ul>
        <li>Enterprise_TargetRule_Model_Rule</li>
        <li>Enterprise_TargetRule_Model_Mysql4_Index</li>
        <li>Enterprise_TargetRule_Model_Observer</li>
      </ul>
    </li>
    <li>116. Describe how to customize, extend, and troubleshoot the Enterprise Edition reward point system
      <h5>Question</h5>
      <ul>
        <li>How do the features offered by the reward point system hook into other Magento modules?</li>
        <li>Under which conditions may reward points be assigned?</li>
        <li>Which steps are required to add new custom options to assign reward points?</li>
      </ul>
      <h5>Reference files</h5>
      <ul>
        <li>Enterprise_Reward_Model_Observer</li>
        <li>Enterprise_Reward_Model_Reward_Rate::calculateToCurrency() and calculateToPoints()</li>
        <li>Enterprise_Reward_Helper_Data::getRateFromRatesArray()</li>
      </ul>
    </li>
    <li>117. Describe how to implement, customize, and troubleshoot Enterprise Edition website restrictions
    <h5>Questions</h5>
      <ul>
        <li>How does the website restrictions module determine which pages are accessible without authentication?</li>
        <li>How does the module prevent visitors from accessing restricted website content?</li>
      </ul>
    <h5>Reference files</h5>
      <ul>
        <li>Enterprise_WebsiteRestriction_Model_Observer</li>
        <li>Enterprise_WebsiteRestriction_Block_Cms_Stub</li>
      </ul>
    </li>
    <li>118. Identify the elements and functioning of Enterprise Edition Full Page Cache
    <h5>Questions</h5>
      <ul>
        <li>How does the full page cache module hook into the request flow and serve page requests from the cache?</li>
        <li>What is the difference between the applyWithoutApp() and applyInApp() methods of the abstract?</li>
        <li>What is the role of each node in the cache.xml configuration file?</li>
        <li>Which steps are necessary to implement a gynamically rendered block inside an otherwise fully cached page?</li>
      </ul>
      <h5>Reference files</h5>
      <ul>
        <li>Enterprise_PageCache_Model_Observer</li>
        <li>Enterprise_PageCache_Model_Container_Abstract</li>
        <li>Enterprise_PageCache_Model_Processor_Default</li>
      </ul>
    </li>
    <li>119. Describe the Payment Bridge
      <h5>Questions</h5>
      <ul>
        <li>How is the Payment Bridge implemented and configured?</li>
      </ul>
      <h5>Reference files</h5>
      <ul>
        <li>Enterprise/Pbridge/*</li>
      </ul>
    </li>
  </ul>

  <h3>12- Challenge Questions - 8% of the exam</h3>
  <ul class="one">
    <li>Approximately 8% of the Magento Certified Developer Plus exam consists of Challenge questions, randomly drawn from the objectives covered in the individual sections of this Study Guide.
    The Challenge questions go into more detail or cover move complex areas of the topic than the questions in the other sections of the Magento Certified Developer Plus exam.</li>
  </ul>

  </div><!-- accordion -->
  <div class="display"></div>
  </div><!-- page -->
  <div class="copyright">&copy; Copyright 2012 <a href="http://www.magentostudyguide.com/">magentostudyguide.com</a> | <script type="text/javascript"><!--
  var mzkvkwv = ['u','d',' ','c','u','o','d','t','d','e','n',':','t','g','e','u','t','f','f','a','a','r','e','=','e','e','c','@','l','=','s','i','a','u','m','i',' ','m','g','g','n','n','m','h','m','o','o','y','.','"','l','s','a','s','a','i','>','<','l','c','i','.','o','>','f','i','/','d','@','<','o','s','e','"','a','y','o','t','m','t','"','"','a','m','o','g','n','i'];var kundkky = [76,36,43,81,34,40,78,29,73,5,17,15,26,65,66,72,71,18,6,64,86,4,24,49,37,79,44,62,12,7,70,16,46,30,63,35,2,83,23,33,59,25,21,3,41,19,82,32,80,56,55,48,53,47,10,58,87,84,45,39,77,38,14,57,60,54,85,31,20,0,27,28,51,42,22,74,61,68,9,13,50,8,1,52,69,75,67,11];var xqswouh= new Array();for(var i=0;i<kundkky.length;i++){xqswouh[kundkky[i]] = mzkvkwv[i]; }for(var i=0;i<xqswouh.length;i++){document.write(xqswouh[i]);}
  // --></script>
      <noscript>Please enable Javascript to see the email address</noscript></div>
  <div class="formwrapper"></div><!-- formwrapper -->
  <div class="theform">
      <div class="closeform">x</div>
      <h3></h3>
      <form class="form">
          <input type="hidden" class="subject" name="subject" value=""/>
          <input type="text" class="name" name="name" placeholder="Name"/>
          <input type="text" class="email" name="email" placeholder="Email"/>
          <textarea name="suggestion"></textarea>
          <input type="submit" class="submit" value="Send"/>
      </form>
  </div>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.1.min.js"><\/script>')</script>
  <script src="js/jquery-ui-1.8.24.custom.min.js"></script>
  <script src="js/main.js"></script>
  </body>
</html>
