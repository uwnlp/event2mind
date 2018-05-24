These files contain our Event2Mind annotations, in the following (csv) format:
  Source,Event,Xintent,Xemotion,Otheremotion,Xsent,Osent

Short column descriptions:
Source: where the event was extracted from (ROC Stories, Spinn3r, Google Ngrams, Wiktionary Idioms, "It" events)
Event: event phrase (e.g., "PersonX leaves PersonY's dog"; PersonX and PersonY are people placeholders; some events might have "___" as object/phrase placeholders)
XIntent: JSON encoded list of PersonX's intents behind the event
Xemotion: JSON encoded list of PersonX's reactions after the event takes place
Otheremotion: JSON encoded list of other people's reactions (PersonY, participants implied by the event)
Xsent: Average sentiment of PersonX's intent (negative=1 - positive=5); is empty if the event isn't caused by PersonX
Osent: Average sentiment of PersonX's intent (negative=1 - positive=5); is empty if the event doesn't involve other people

Note that Xintent,Xemotion,Otheremotion can be judged by annotators as none, in which case the JSON list will contain "none"

For more information, please read the paper:
Hannah Rashkin, Maarten Sap, Emily Allaway, Noah A. Smith, & Yejin Choi (2018).
Event2Mind: Commonsense Inference on Events, Intents and Reactions. ACL
