<input type="number" class="input-text <?php echo esc_attr(isset($field['class']) ? $field['class'] : $key); ?>" name="<?php echo esc_attr(isset($field['name']) ? $field['name'] : $key); ?>" id="<?php echo isset($field['id']) ? esc_attr($field['id']) :  esc_attr($key); ?>" placeholder="<?php echo esc_attr($field['placeholder']); ?>" attribute="<?php echo esc_attr(isset($field['attribute']) ? $field['attribute'] : ''); ?>" value="<?php echo isset($field['value']) ? esc_attr($field['value']) : ''; ?>" min="<?php echo isset($field['min']) ? esc_attr($field['min']) : esc_attr('0'); ?>" max="<?php echo isset($field['max']) ? esc_attr($field['max']) : ''; ?>" maxlength="<?php echo !empty($field['maxlength']) ? esc_attr($field['maxlength']) : ''; ?>" <?php if (!empty($field['required'])) echo esc_attr('required'); ?> <?php echo esc_attr(isset($field['step']) ? 'step=any': ''); ?> />

<?php if (!empty($field['description'])) : ?>
    <small class="description">
        <?php echo wp_kses_post($field['description']); ?>
    </small>
<?php endif; ?>