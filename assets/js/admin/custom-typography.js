wp.domReady(() => {
    const { registerFormatType, RichTextToolbarButton } = wp.richText;

    // Đăng ký một lựa chọn phông chữ tùy chỉnh
    registerFormatType('custom-font', {
        title: 'Custom Font',
        tagName: 'span',
        className: 'custom-font',
        edit: ({ isActive, value, onChange }) => {
            const toggleFormat = () => {
                onChange(
                    wp.richText.toggleFormat(value, {
                        type: 'custom-font'
                    })
                );
            };

            return (
                <RichTextToolbarButton
                    icon="editor-textcolor"
                    title="Custom Font"
                    onClick={toggleFormat}
                    isActive={isActive}
                />
            );
        }
    });
});
