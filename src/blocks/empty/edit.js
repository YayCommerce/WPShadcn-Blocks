import { useBlockProps, InnerBlocks } from "@wordpress/block-editor";

const TEMPLATE = [
  [
    "core/group",
    { layout: { type: "flex", flexWrap: "nowrap", justifyContent: "center" } },
    [
      [
        "core/group",
        {},
        [
          [
            "core/group",
            {
              layout: {
                type: "flex",
                flexWrap: "nowrap",
                justifyContent: "center",
              },
            },
            [
              [
                "core/group",
                {
                  style: {
                    spacing: {
                      padding: {
                        top: "var:preset|spacing|2",
                        bottom: "var:preset|spacing|2",
                        left: "var:preset|spacing|2",
                        right: "var:preset|spacing|2",
                      },
                    },
                    border: {
                      radius: {
                        topLeft: "8px",
                        topRight: "8px",
                        bottomLeft: "8px",
                        bottomRight: "8px",
                      },
                    },
                  },
                  backgroundColor: "secondary",
                },
                [
                  [
                    "core/image",
                    {
                      align: "center",
                      width: 64,
                      sizeSlug: "thumbnail",
                      svgCode:
                        '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="tabler-icon tabler-icon-folder-code "><path d="M11 19h-6a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2h4l3 3h7a2 2 0 0 1 2 2v4"></path><path d="M20 21l2 -2l-2 -2"></path><path d="M17 17l-2 2l2 2"></path></svg>',
                    },
                  ],
                ],
              ],
            ],
          ],
          [
            "core/heading",
            { level: 3, textAlign: "center", content: "No Projects Yet" },
          ],
          [
            "core/paragraph",
            {
              align: "center",
              content:
                "You haven't created any projects yet. Get started by creating your first project.",
              textColor: "muted-foreground",
            },
          ],
          [
            "core/buttons",
            { layout: { type: "flex", justifyContent: "center" } },
            [
              ["core/button", { text: "Create Project" }],
              [
                "core/button",
                { text: "Import Project", className: "is-style-outline" },
              ],
            ],
          ],
          [
            "core/paragraph",
            {
              content: "Learn more",
              align: "center",
              textColor: "muted-foreground",
            },
          ],
        ],
      ],
    ],
  ],
];

export default function Edit() {
  const blockProps = useBlockProps({
    className: "wp-block-wpshadcn-empty",
  });

  return (
    <div {...blockProps}>
      <InnerBlocks template={TEMPLATE} templateLock={false} />
    </div>
  );
}
