``include``
===========

The ``include`` function returns the rendered content of a template:

.. code-block:: twig

    {{ include('template.html.twig') }}
    {{ include(some_var) }}

Included templates have access to the variables of the active context.

If you are using the filesystem loader, the templates are looked for in the
paths defined by it.

The context is passed by default to the template but you can also pass
additional variables:

.. code-block:: twig

    {# template.html.twig will have access to the variables from the current context and the additional ones provided #}
    {{ include('template.html.twig', {name: 'Fabien'}) }}

You can disable access to the context by setting ``with_context`` to
``false``:

.. code-block:: twig

    {# only the name variable will be accessible #}
    {{ include('template.html.twig', {name: 'Fabien'}, with_context: false) }}

.. code-block:: twig

    {# no variables will be accessible #}
    {{ include('template.html.twig', with_context: false) }}

And if the expression evaluates to a ``\Twig\Template`` or a
``\Twig\TemplateWrapper`` instance, Twig will use it directly::

    // {{ include(template) }}

    $template = $twig->load('some_template.html.twig');

    $twig->display('template.html.twig', ['template' => $template]);

When you set the ``ignore_missing`` flag, Twig will return an empty string if
the template does not exist:

.. code-block:: twig

    {{ include('sidebar.html.twig', ignore_missing: true) }}

You can also provide a list of templates that are checked for existence before
inclusion. The first template that exists will be rendered:

.. code-block:: twig

    {{ include(['page_detailed.html.twig', 'page.html.twig']) }}

If ``ignore_missing`` is set, it will fall back to rendering nothing if none
of the templates exist, otherwise it will throw an exception.

When including a template created by an end user, you should consider
:doc:`sandboxing<../sandbox>` it:

.. code-block:: twig

    {{ include('page.html.twig', sandboxed: true) }}

Arguments
---------

* ``template``:       The template to render
* ``variables``:      The variables to pass to the template
* ``with_context``:   Whether to pass the current context variables or not
* ``ignore_missing``: Whether to ignore missing templates or not
* ``sandboxed``:      Whether to sandbox the template or not
