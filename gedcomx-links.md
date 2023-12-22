# GECOM X

## Understanding What Gedcom X is

[What is Gedcom X?](https://www.familysearch.org/developers/docs/guides/gedcom-x) is the definitive introduction. It has helpful
links that will guide you to a better understanding of what Gedcom X is and how it works.

The [Family Tree Data Model](https://www.familysearch.org/developers/docs/guides/FamilyTree-data-objects) is intended to help programmers become
familiar with the data model of the FamilySearch Family Tree, which closely conform to the GedcomX [specification](http://www.gedcomx.org/Specifications.html).

The GEDCOM X [Conceptual Model](https://github.com/FamilySearch/gedcomx/blob/master/specifications/conceptual-model-specification.md) is a
specification of formal concepts and types that are used to provide a standard model and vocabulary for describing genealogical data.
Genealogical data is structured by data types such as persons, relationships, and sources.

The differences between Events and Facts in Gedcom X is discussed here:

> [!TIP]
> To easily test the ideas found in the first link below, simply go to **Family Tree -> Tree*, and do `+ Event` to add an event,
> or `+ Fact` to add a fact.

## Events versus Facts

Events and facts are separately distinguished in Gedcom X. Events are occurances viewed abstractly apart from the persons in those events. Events often refer to persons
and might infer relationships, but **events are described independently of those persons and relationships.**

A "fact" is a data item that is presumed to be true about a specific subject, such as a person or relationship. A time or place is often, but not always,
applicable to a fact. **Facts do not exist outside the scope of the subject to which they apply.**:w

* [Clarifying Events vs Facts](https://github.com/FamilySearch/gedcomx/commit/ef0fe00c3645d2809c68cbccc39353d2154f9b23)
 
* Section 2.5.2 of [Events and Facts Distinguished in Detail](https://github.com/FamilySearch/gedcomx/blob/master/specifications/conceptual-model-specification.md)

### Event types specification

See Gedcom X [Events specification](https://github.com/FamilySearch/gedcomx/blob/master/specifications/event-types-specification.md) in Gedcom X Conceptual Model. 

### Fact types specification

See Gedcom X [Facts specification](https://github.com/FamilySearch/gedcomx/blob/master/specifications/fact-types-specification.md) in Gedcom X Conceptual Model.
  
The [GEDCOM X JSON Serialization Format](https://github.com/FamilySearch/gedcomx/blob/master/specifications/json-format-specification.md) specifies a JSON
media type for the GEDCOM X Conceptual Model, and requests discussion and suggestions for improvements. Highlighted JSON schema for each of the JSON objects can be see
at the GedcomX JSON [serialization format page](https://www.familysearch.org/developers/docs/api/gx_json). It also gives each object's properties, any superclasses
and interfaces are also given.

There is also an [GEDCOM X XML Serialization Format](https://github.com/FamilySearch/gedcomx/blob/master/specifications/xml-format-specification.md).


## Software

- [GEDCOM 5.5 to GEDCOM X Converter](https://github.com/FamilySearch/gedcom5-conversion).

- The [GEDCOM X Web services extension](http://rs.gedcomx.org/) (i.e. "GEDCOM X RS") defines a standard interface to genealogical data applications for the World Wide Web.

- [GedcomX-viewer](https://github.com/FamilySearch/gedcomx-viewer). Clone it and do 'open index.html'. You can add persons and download the tree (to .json).
